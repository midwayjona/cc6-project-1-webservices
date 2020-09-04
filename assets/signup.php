<!-- relative root -->
<?php
$path = '/cc6-project-1-webservices/'
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Credit Card issuer">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master Card</title>
  <link rel="stylesheet" href="<?php echo $path ?>assets/css/style.css">
</head>
<!-- header -->
<?php include __DIR__."/header.php" ?>

<div class="main-bg">
  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <div class="title" title="Master Card">Signup</div>
        <br>
        Easily manage your bank accounts and finances <b>online</b>.
        <br>
        Please provide the following information to begin your enrollment.

        <?php
        if(isset($_GET['status'])) {
          $status = $_GET['status'];
          if ($status == 'ID_NOT_FOUND') {
            // code...
            echo "
            <br><br>
            ✖ id wasn't found in our records, check id or contact support.
            ";
          } elseif ($status == 'ID_ASSIGNED') {
            // code...
            echo "
            <br><br>
            ✖ this id already has an username assigned.
            ";
          } elseif ($status == 'USER_EXIST') {
            // code...
            echo "
            <br><br>
            ✖ username already exist, please type a different one.
            ";
          } elseif ($status == 'EMAIL_EXIST') {
            // code...
            echo "
            <br><br>
            ✖ email already exist in our records, please type a different one.
            ";
          } elseif ($status == 'SUCCESS') {
            // code...
            echo "
            <br><br>
            ✔️ credentials saved, you can login.
            ";
          }
        }
          ?>
        <form class="signup-form" action="<?php echo $path ?>includes/signup.inc.php" method="post">
          <input type="text" name="cid" placeholder="ID" maxlength="13" required>
          <input type="text" name="cuser" placeholder="Username" required>
          <input type="email" name="cmail" placeholder="Mail" required>
          <input id="cpwd" name="cpwd" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.cpwd_vrfy.pattern = this.value;" placeholder="Password" required>
          <input id="cpwd_vrfy" name="cpwd_vrfy" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
          <button class="btn btn-two" type="submit" name="signup-submit"><b>Enroll in Online Banking</b></button>
        </form>
      </section>
    </div>
  </main>
</div>
<!-- footer -->
<?php require __DIR__."/footer.php" ?>
