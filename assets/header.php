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
  <link rel="stylesheet" href="<?php $path ?>assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <header>

    <a class="header-logo" href="<?php echo $path.'index.php' ?>">
      <img src="<?php echo $path ?>assets/media/logo.svg" alt="logo">
    </a>

    <nav>
      <ul>
        <li ><a href="<?php echo $path.'index.php' ?>">Home</a></li>
        <li ><a href="<?php echo $path.'index.php' ?>">About</a></li>
        <li ><a href="<?php echo $path.'index.php' ?>">Contact</a></li>
        <li ><a href="<?php echo $path.'index.php' ?>">Blog</a></li>
      </ul>
      </nav>

      <div class="header-login">
        <form class="login-from" action="<?php echo $path ?>includes/login.inc.php" method="post">
          <input type="text" name="userid" placeholder="Username">
          <input type="password" name="userpwd" placeholder="Password">
          <button class="btn btn-two" type="summit" name="login-submit">Login</button>
        </form>
        <a class="btn btn-two btn-w" href="<?php echo $path ?>assets/signup.php">Signup</a>
        <form action="<?php echo $path ?>assets/includes/logout.inc.php" method="post">
          <button class="btn btn-two" type="summit" name="logout-submit">Logout</button>
        </form>
      </div>

    </nav>
  </header>
