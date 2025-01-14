<?php
session_start();
error_log("Página de redirecionamento iniciada");

if (isset($_SESSION['user_id'])) {
  error_log("Usuário autenticado, redirecionando para index.php");
  header("Location: index.php");
  exit();
} else {
  error_log("Usuário não autenticado, redirecionando para Login.php");
  header("Location: Login.php");
  exit();
}
?>
