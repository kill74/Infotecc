<?php
ob_start();
session_start();
require_once 'db_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log para verificar se o script está sendo executado
error_log("Script de login iniciado");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST['password']);

  error_log("Tentativa de login para o email: " . $email);

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
    error_log("Iniciando consulta ao banco de dados");
    $stmt = $conn->prepare("SELECT id, senha, tipo_utilizador_id FROM utilizadores WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['senha'])) {
      error_log("Autenticação bem-sucedida para o usuário: " . $email);
      session_regenerate_id(true);
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['tipo_utilizador_id'] = $user['tipo_utilizador_id'];
      $_SESSION['success'] = "Login bem-sucedido!";
      unset($_SESSION['error']);

      // Redirecionamento para uma página intermediária
      header("Location: redirect.php");
      error_log("Redirecionando para redirect.php");
      exit();
    } else {
      error_log("Falha na autenticação para o email: " . $email);
      $_SESSION['error'] = "Credenciais inválidas. Verifique o seu email e senha.";
      header("Location: Login.php");
      exit();
    }
  } catch (PDOException $e) {
    error_log("Erro no login: " . $e->getMessage());
    $_SESSION['error'] = "Erro ao tentar fazer login. Por favor, tente novamente.";
    header("Location: Login.php");
    exit();
  }
}

// Se chegou aqui, não era um POST request
header("Location: Login.php");
exit();
