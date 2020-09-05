<!-- relative root -->
<?php
$path = '/cc6-project-1-webservices/';
include __DIR__."/header.php";
?>

<script>
$("#signupAlert").alert('close')
</script>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $path ?>assets/css/style.css">
</head>
<!-- header -->



<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-7 mx-auto">

      <form class="form-signin"  action="<?php echo $path ?>includes/signup.inc.php" method="post">
        <div class="text-center mb-4">
          <img class="mb-4" src="<?php echo $path ?>assets/media/logo.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Enroll in Mastercard Online®</h1>
          <h6>Easily manage your bank accounts and finances <b>online</b>.</h6>
            <?php
            if(isset($_GET['status'])) {
              $status = $_GET['status'];
              if ($status == 'ID_NOT_FOUND') {
                // code...
                echo '
                <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
                  ✖ id was not found in our records, check id or contact support.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              } elseif ($status == 'ID_ASSIGNED') {
                // code...
                echo '
                <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
                  ✖ this id already has an username assigned.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              } elseif ($status == 'USER_EXIST') {
                // code...
                echo '
                <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
                  ✖ username already exist, please type a different one.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              } elseif ($status == 'EMAIL_EXIST') {
                // code...
                echo '
                <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
                  ✖ email already exist in our records, please type a different one.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              } elseif ($status == 'SUCCESS') {
                // code...
                echo '
                <div class="alert alert-success alert-dismissible show fade my-4" id="signupAlert" role="alert">
                  ✔️ credentials saved, you can login.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              }
            }
            ?>
        </div>

        <div class="form-label-group mb-3">
          <input type="text" name="cid" id="inputID" class="form-control" placeholder="ID" required="" autofocus="" maxlength="13" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
          <label for="inputID">ID</label>
        </div>

        <div class="form-label-group mb-3">
          <input type="text" name="cuser" id="inputUsername" class="form-control" placeholder="Username" required="">
          <label for="inputUsername">Username</label>
        </div>

        <div class="form-label-group mb-3">
          <input type="email" name="cmail" id="inputMail" class="form-control" placeholder="Email" required="">
          <label for="inputMail">Email</label>
        </div>

        <div class="form-label-group mb-3">
          <input type="password" name="cpwd" name="cuser" id="cpwd" class="form-control" placeholder="Password" required="" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.cpwd_vrfy.pattern = this.value;">
          <label for="cpwd">Password</label>
        </div>

        <div class="form-label-group mb-3">
          <input type="password" name="cpwd_vrfy" name="cuser"id="cpwd_vrfy" class="form-control" placeholder="Password" required="" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');">
          <label for="cpwd_vrfy">Password</label>
        </div>


        <div class="checkbox mb-3">
          <label><input type="checkbox" value="remember-me"> Remember me </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup-submit">Enroll in Online Banking</button>


        <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>

      </form>

    </div>
  </div>
</div>

<!-- footer -->
<?php //require __DIR__."/footer.php" ?>
