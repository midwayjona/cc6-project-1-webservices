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
        <form class="signup-form" action="includes/ignup.inc.php" method="post">
          <input type="number" name="userid" placeholder="ID">
          <input type="text" name="username" placeholder="Username">
          <input type="text" name="mail" placeholder="Mail">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd" placeholder="Repeat password">
          <button class="btn btn-two" type="submit" name="signup-submit">Signup</button>
        </form>
      </section>

    </div>


  </main>



</div>
<?php require "assets/footer.php" ?>
