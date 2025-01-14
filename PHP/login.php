<?php
session_start();
require_once 'db_connection.php';  // Updated to match the connection file name

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitize inputs
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST['password']);

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Por favor, insira um email válido.";
    header("Location: login.php");
    exit();
  }

  // Check for empty fields
  if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Por favor, preencha todos os campos.";
    header("Location: login.php");
    exit();
  }

  try {
    // Using the $conn variable from db_connection.php instead of $pdo
    $stmt = $conn->prepare("SELECT id, senha FROM utilizadores WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['senha'])) {
      // Start a secure session
      session_regenerate_id(true);

      $_SESSION['user_id'] = $user['id'];
      $_SESSION['success'] = "Login bem-sucedido!";

      unset($_SESSION['error']);

      header("Location: index.php");
      exit();
    } else {
      $_SESSION['error'] = "Credenciais inválidas. Verifique o seu email e senha.";
      header("Location: login.php");
      exit();
    }
  } catch (PDOException $e) {
    // Log the error securely (don't expose error details to users)
    error_log("Login error: " . $e->getMessage());

    $_SESSION['error'] = "Erro ao tentar fazer login. Por favor, tente novamente.";
    header("Location: login.php");
    exit();
  }
}
