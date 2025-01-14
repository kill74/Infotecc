<?php
session_start();
require_once 'db_connection.php';

if (isset($_SESSION['error'])) {
  echo "<div class='error-message'>{$_SESSION['error']}</div>";
  unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
  echo "<div class='success-message'>{$_SESSION['success']}</div>";
  unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="Login.css">
</head>

<body>
  <section class="login">
    <div class="container">
      <h2>Login</h2>
      <form action="login.php" method="POST">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
      <p>Não tens uma conta? <a href="Register.php">Regista-te aqui</a>.</p>
    </div>
  </section>
</body>

</html>
