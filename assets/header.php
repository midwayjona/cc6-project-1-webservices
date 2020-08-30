<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Credit Card issuer">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master Card</title>
</head>

<body>
  <header>
    <nav>
      <a href="#">
        <img src="assets/media/logo.svg" alt="logo">
      </a>
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
      <div>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="userid" placeholder="Username">
          <input type="password" name="userpwd" placeholder="Password">
          <button type="summit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
      </div>
    </nav>
  </header>
