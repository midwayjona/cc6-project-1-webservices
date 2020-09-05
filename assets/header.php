<!-- relative root -->
<?php
session_start();
$path = '/cc6-project-1-webservices/'
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mastercard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php $path ?>assets/css/style.css">
</head>


<body>
  <header>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo $path.'index.php' ?>">
        <img src="<?php echo $path ?>assets/media/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Mastercard
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link"href="<?php echo $path.'index.php' ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $path.'index.php' ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $path.'index.php' ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Apply</a>
          </li>
        </ul>

        <?php
        if (isset($_SESSION['cid'])) {
          // code...
          echo '
          <span class="navbar-text">
          Welcome <h5 class="d-inline mx-1"><a href="'.$path.'index.php">'.$_SESSION['cname'].'</a></h5>
          </span>
          <form class="form-inline my-2 my-lg-0" action="'.$path.'includes/logout.inc.php" method="post">
            <button class="btn btn-outline-info mx-2" type="summit" name="logout-submit">Logout</button>
          </form>
          ';
        } else {
          // code...
          echo '
          <form class="form-inline my-2 my-lg-0" action="'.$path.'includes/login.inc.php" method="post">

            <!-- <input class="form-control mr-sm-2" type="text" name="cuser" placeholder="Username"> -->

            <div class="form-label-group">
                <input type="text" name="cuser" id="inputUser" class="form-control mr-sm-2" placeholder="Username" required="">
                <label for="inputUser">Username</label>
            </div>

            <!-- <input class="form-control mr-sm-2" type="password" name="cpwd" placeholder="Password"> -->

            <div class="form-label-group">
                <input type="password" name="cpwd" id="inputPassword" class="form-control mr-sm-2" class="form-control" placeholder="Password" required="">
                <label for="inputPassword">Password</label>
            </div>


            <button class="btn btn-outline-info mx-1" type="summit" name="login-submit">Login</button>
          </form>
          <a class="btn btn-outline-info mx-1" href="'.$path.'assets/signup.php">Signup</a>
          ';
        }
         ?>

      </div>
    </nav>
  </header>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- end -->
