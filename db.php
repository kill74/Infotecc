<?php

$host = 'localhost';
$dbname = 'infotec';
$username = 'root';
$password = '';

try {

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec("SET NAMES 'utf8'");

 # echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {

  echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
