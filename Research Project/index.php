<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <section>
      <form method="POST" action="">
        <h1>Login</h1>

        <div class="inputbox">
          <input type="email" name="email" required />
          <label>Email</label>
        </div>

        <div class="inputbox">
          <input type="password" name="password" required />
          <label>Password</label>
        </div>

        <div class="forget">
          <label><input type="checkbox" name="remember" /> Remember Me</label>
          <a href="#">Forget Password</a>
        </div>

        <button type="submit">Log in</button>

        <div class="register">
          <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
      </form>
    </section>
  </body>
</html>
