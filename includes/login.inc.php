<?php

if (isset($_POST['login-submit'])) {
  // code...
  require 'dbh.inc.php';

  $cuser = $_POST['cuser'];
  $cpwd = $_POST['cpwd'];

  $sql = 'SELECT * FROM costumer WHERE cuser = :cuser';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['cuser' => $cuser]);
  $result = $stmt->fetchObject();

  if (count($result) == 0) {
    // code...
    header("Location: ../index.php?status=USER_NOT_FOUND");
    exit();
  } else {
    // code...
    $pwdCheck = password_verify($cpwd, $result->cpassword);
    if ($pwdCheck == FALSE) { header("Location: ../index.php?status=WRONG_PWD"); exit(); }
    elseif ($pwdCheck == TRUE) {
      // code...
      session_start();
      $_SESSION['cid'] = $result->cid;
      $_SESSION['cname'] = $result->cname;
      $_SESSION['cuser'] = $result->cuser;
      $_SESSION['cemail'] = $result->cemail;
      $_SESSION['cadmin'] = $result->cadmin;
      if ($_SESSION['cadmin']) {
        // code...
        header("Location: ../assets/cpanel.php");
        exit();
      }
      header("Location: ../index.php?status=SUCCESS");
      exit();
    } else { header("Location: ../index.php?status=WRONG_PWD"); exit(); }
  }
} else {
  // code...
  header("Location: ../index.php");
  exit();
}
