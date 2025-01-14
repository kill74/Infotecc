<?php
session_start();
require_once 'db_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST['password']);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Por favor, insira um email válido.";
    header("Location: Login.php");
    exit();
  }

  if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Por favor, preencha todos os campos.";
    header("Location: Login.php");
    exit();
  }

  try {
    $stmt = $conn->prepare("SELECT id, senha FROM utilizadores WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['senha'])) {
      session_regenerate_id(true); // Prevenção de fixação de sessão
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['success'] = "Login bem-sucedido!";
      unset($_SESSION['error']);
      header("Location: index.php");
      exit();
    } else {
      $_SESSION['error'] = "Credenciais inválidas. Verifique o seu email e senha.";
      header("Location: Login.php");
      exit();
    }
  } catch (PDOException $e) {
    error_log("Login error: " . $e->getMessage());
    $_SESSION['error'] = "Erro ao tentar fazer login. Por favor, tente novamente.";
    header("Location: Login.php");
    exit();
  }
}
