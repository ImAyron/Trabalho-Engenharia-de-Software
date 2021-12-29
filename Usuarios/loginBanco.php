<?php

require '../Database/conexao.php';

$user = null;

$email = $_POST["email"];
$senha = $_POST['senha'];

$stmt = $conection->prepare("SELECT * FROM usuarios WHERE email=:email AND senha=:senha");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

$stmt = $stmt->fetch();

if (empty($stmt)) {
  echo "<script>alert('Login ou senha incorretos!'); location.replace('../index.php');</script>";
  die();
} else {

  session_start();
  $_SESSION['email'] = $stmt['email'];
  $_SESSION['nome'] = $stmt['nome'];
  $_SESSION['matricula'] = $stmt['matricula'];
  $_SESSION['cpf'] = $stmt['cpf'];
  $_SESSION['tipo'] = $stmt['tipo'];




  header('location:../index.php');
}