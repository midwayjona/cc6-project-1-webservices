<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Credit Card issuer">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master Card</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>


<?php require "assets/header.php" ?>
<div class="main-bg">
  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <h1>Signup</h1>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
          <input type="text" name="cid" placeholder="ID" maxlength="13" >
          <input type="text" name="cuser" placeholder="Username" required>
          <input type="email" name="cmail" placeholder="Mail" required>
          <input id="cpwd" name="cpwd" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.cpwd_vrfy.pattern = this.value;" placeholder="Password" required>
          <input id="cpwd_vrfy" name="cpwd_vrfy" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
          <button class="btn btn-two" type="submit" name="signup-submit">Signup</button>
        </form>
      </section>
    </div>
  </main>
</div>
<?php require "assets/footer.php" ?>
