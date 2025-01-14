  <?php
  session_start();
  require_once 'db_connection.php';

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $nome = trim($_POST['nome']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error'] = "Por favor, insira um email válido.";
      header("Location: Register.php");
      exit();
    }

    if (empty($email) || empty($nome) || empty($password)) {
      $_SESSION['error'] = "Por favor, preencha todos os campos.";
      header("Location: Register.php");
      exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $stmt = $conn->prepare("INSERT INTO utilizadores (email, nome, senha, tipo_utilizador_id) VALUES (:email, :nome, :senha, 1)");
      $stmt->execute([
        'email' => $email,
        'nome' => $nome,
        'senha' => $hashed_password
      ]);

      $_SESSION['success'] = "Registro bem-sucedido! Por favor, faça login.";
      header("Location: Login.php");
      exit();
    } catch (PDOException $e) {
      if ($e->getCode() == 23000) { // Código de erro para entradas duplicadas
        $_SESSION['error'] = "Este email já está registrado.";
      } else {
        $_SESSION['error'] = "Erro ao registrar. Por favor, tente novamente.";
      }
      header("Location: Register.php");
      exit();
    }
  }
  ?>
