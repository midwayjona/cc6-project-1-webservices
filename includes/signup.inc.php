<?php

if (isset($_POST['signup-submit'])) {
  // code...
  require 'dbh.inc.php';

  $cid = $_POST['cid'];
  $cuser = $_POST['cuser'];
  $cmail = $_POST['cmail'];
  $cpwd = $_POST['cpwd'];

  $sql = 'SELECT * FROM costumer WHERE cid = :cid';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['cid' => $cid]);
  $result = $stmt->fetchObject();

    if ($result == FALSE) {
    // if NULL cid not exist
    header("Location: ../assets/signup.php?status=ID_NOT_FOUND");
  } elseif ($result->cid != $cid) {
    // id dont match
    header("Location: ../assets/signup.php?status=ID_NOT_FOUND");
  } elseif ($result->cuser == $cuser) {
    // id with user
    header("Location: ../assets/signup.php?status=ID_ASSIGNED");
  }

  // username needs to be unique
  $sql = 'SELECT cuser FROM costumer WHERE cuser=:cuser';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['cuser' => $cuser]);
  $result = $stmt->fetchObject();
  if ($result > 0) { header("Location: ../assets/signup.php?status=USER_EXIST"); }

  // email needs to be unique
  $sql = 'SELECT cuser FROM costumer WHERE cemail=:cemail';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['cemail' => $cmail]);
  $result = $stmt->fetchObject();
  if ($result > 0) { header("Location: ../assets/signup.php?status=EMAIL_EXIST"); }

  // id, username and email verificated
  $sql = 'UPDATE costumer SET cuser=:cuser, cemail=:cemail, cpwd=:cpwd WHERE cid=:cid';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['cuser' => $cuser, 'cemail' => $cmail, 'cpwd' => $cpwd, 'cid' => $cid]);

  print_r($stmt);

  echo "<br><br>id: ".$cid;
  echo "<br>user: ".$cuser;
  echo "<br>email: ".$cmail;
  echo "<br><br>";
  print_r( $conn->errorInfo() );






    // if ($result != NULL) {
    //   // code...
    //   header("Location: ../assets/signup.php?status=USER_EXIST");
    // } else {
    //   // code...
    //   header("Location: ../assets/signup.php?status=YOURUCK");
    //
    //   echo $result;
    // }


      // // if more than 0 objects fetch, then user already exist
      // if ($row == NULL) {
      //   header("Location: ../assets/signup.php?status=$cid_temp");
      // }


    // }




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
