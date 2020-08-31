<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Credit Card issuer">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master Card</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header>

    <a class="header-logo" href="index.php">
      <img src="assets/media/logo.svg" alt="logo">
    </a>


    <nav>
      <ul>
        <li ><a href="index.php">Home</a></li>
        <li ><a href="index.php">About</a></li>
        <li ><a href="index.php">Contact</a></li>
        <li ><a href="index.php">Blog</a></li>
      </ul>
      </nav>



      <div class="header-login">
        <form class="login-from" action="includes/login.inc.php" method="post">
          <input type="text" name="userid" placeholder="Username">
          <input type="password" name="userpwd" placeholder="Password">
          <button class="btn btn-two" type="summit" name="login-submit">Login</button>
        </form>
        <a class="btn btn-two btn-w" href="signup.php">Signup</a>
        <form action="includes/logout.inc.php" method="post">
          <button class="btn btn-two" type="summit" name="logout-submit">Logout</button>
        </form>
      </div>

    </nav>
  </header>
