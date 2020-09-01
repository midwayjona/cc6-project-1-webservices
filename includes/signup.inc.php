<?php

if (isset($_POST['signup-submit'])) {
  // code...
  require 'dbh.inc.php';

  $cid = $_POST['cid'];
  $cuser = $_POST['cuser'];
  $cmail = $_POST['cmail'];
  $cpwd = $_POST['cpwd'];
  $cpwd_rpt = $_POST['cpwd_vrfy'];

  if (empty($cid)) {
    // code...
    header("Location: ../signup.php?error=emptyfields&");
  } else {

    $sql = 'SELECT * FROM costumer WHERE cid=:cid';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['cid' => $cid]);
    $row = $stmt->fetchAll();

    foreach ($row as $row) {
      // code...
      echo $row->cid.'<br>';
      echo $row->cuser.'<br>';
    }



    // if ($stmt->execute([$cid])) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['cid'].'<br>';
    //   }
    // }
    // if ($stmt->execute([$cid])) {
    //   while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     echo $row->cid.'<br>';
    //   }
    // }

  }
}
