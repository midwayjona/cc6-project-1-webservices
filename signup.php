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

    <div class="wrapper main">
      <section class="section-default">
        <h1>Signup</h1>
        <form class="form-signup" action="includes/ignup.inc.php" method="post">
          <input type="text" name="userid" placeholder="ID">
          <input type="text" name="username" placeholder="Username">
          <input type="text" name="mail" placeholder="Mail">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd" placeholder="Repeat password">
          <button type="submit" name="signup-submit">Signup</button>
        </form>
      </section>

    </div>


    <div class="form-style-2">
    <div class="form-style-2-heading">Provide your information</div>
    <form action="" method="post">
    <label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
    <label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
    <label><span>Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"  /></label>
    <label for="field4"><span>Regarding</span><select name="field4" class="select-field">
    <option value="General Question">General</option>
    <option value="Advertise">Advertisement</option>
    <option value="Partnership">Partnership</option>
    </select></label>
    <label for="field5"><span>Message <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>

    <label><span> </span><input type="submit" value="Submit" /></label>
    </form>
    </div>

    
  </main>



</div>
<?php require "assets/footer.php" ?>
