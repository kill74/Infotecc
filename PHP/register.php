<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Por favor, preencha todos os campos.";
    header("Location: Register.php");
    exit();
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Por favor, insira um email válido.";
    header("Location: Register.php");
    exit();
  }

  try {
    $stmt = $pdo->prepare("SELECT id FROM utilizadores WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
      $_SESSION['error'] = "Este email já está registado. Por favor, utilize outro email.";
      header("Location: Register.php");
      exit();
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO utilizadores (email, password) VALUES (:email, :password)");
    $stmt->execute([
      'email' => $email,
      'password' => $hashed_password
    ]);

    $_SESSION['success'] = "Registo bem-sucedido! <a href='Login.php'>Faz login aqui</a>.";
    header("Location: Login.php");
    exit();
  } catch (PDOException $e) {
    $_SESSION['error'] = "Erro ao tentar registar. Por favor, tente novamente.";
    header("Location: Register.php");
    exit();
  }
}
