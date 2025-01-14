<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Por favor, preencha todos os campos.";
    header("Location: Login.php");
    exit();
  }

  try {
    $stmt = $pdo->prepare("SELECT id, password FROM utilizadores WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['success'] = "Login bem-sucedido!";
      header("Location: index.php");
      exit();
    } else {
      $_SESSION['error'] = "Credenciais inválidas. Verifique o seu email e password.";
      header("Location: Login.php");
      exit();
    }
  } catch (PDOException $e) {
    $_SESSION['error'] = "Erro ao tentar fazer login. Por favor, tente novamente.";
    header("Location: Login.php");
    exit();
  }
}
