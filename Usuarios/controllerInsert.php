<?php
    include 'querys.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];
    $senha = $_POST['senha'];

    inserirUsuarios($cpf, $nome, $matricula, $email, $disciplina, $tipo, $senha);
    
    header("location:index.php");