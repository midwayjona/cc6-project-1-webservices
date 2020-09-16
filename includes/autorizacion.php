
<?php
require 'dbh.inc.php';

$cnumber = $_GET['tarjeta'];
$cname=$_GET['nombre'];
$cexp_date=$_GET['fecha_venc'];
$cvv=$_GET['num_seguridad'];
$amount=$_GET['monto'];
$store=$_GET['tienda'];
$format=$_GET['formato'];

$sql = 'SELECT cnumber, card.cid, cexp_date, cissue_date, climit, cbalance, cname, cvv
        FROM card
          LEFT JOIN costumer
            ON costumer.cid = card.cid
        WHERE card.cnumber = :cnumber';
$stmt = $conn->prepare($sql);
$stmt->execute(['cnumber' => $cnumber]);
$row = $stmt->fetchObject();

// amount + balance < card.limit
$amount = intval($amount);
$cbalance = $row->cbalance;
$amount_calc = $amount + $cbalance ;
// date format to yyyymm
$newDate = date("Ym", strtotime($row->cexp_date));
// credit card issuer parameters
$issuer = 'Master Card';
$status = 'DENEGADO';
$refnumber = '0';
// description
$dscr = 'order from '.$store;
$ttype = 'debit';

if ($cvv == $row->cvv && $amount_calc <= $row->climit && $cexp_date == $newDate && $cname == $row->cname) {

  // transaction log
  $sql = 'INSERT INTO transactions ( tid, cnumber, ttype, tdate, tcat, description )
          VALUES ( DEFAULT, :cnumber, :ttype, DEFAULT, DEFAULT, :dscr )';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['cnumber' => $cnumber, 'ttype' => $ttype, 'dscr' => $dscr]);

  // ref number [SERIAL]
  $sql = 'SELECT LASTVAL()';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetchObject();
  $refnumber = $row->lastval;

  // update card balance
  $newBalance = $cbalance + $amount;
  $sql = 'UPDATE card SET cbalance = :newBalance WHERE cnumber = :cnumber';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['newBalance' => $newBalance, 'cnumber' => $cnumber]);

  // set issuer parameters
  $status = 'APROBADO';
  $refnumber = sprintf("MC%010s", $refnumber);
}

if ($format=="XML" || $format=="xml") {
  echo "<autorizacion>\n";
    echo "\t<emisor>$issuer</emisor>\n";
    echo "\t<tarjeta>$cnumber</tarjeta>\n";
    echo "\t<status>$status</status>\n";
    echo "\t<autorizacion>$refnumber</autorizacion>\n";
  echo "</autorizacion>\n";
} elseif ($format=="JSON"||$format=="json") {
  echo "{\"autorización\": {
    \"emisor\":\"$issuer\",
    \"tarjeta\":\"$cnumber\",
    \"status\":\"$status\",
    \"numero\": \"$refnumber\"
    }
  }";
}
