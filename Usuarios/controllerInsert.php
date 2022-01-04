<?php
    include 'querys.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];
    $senha1 = $_POST['senha1'];

    inserirUsuarios($cpf, $nome, $matricula, $email, $disciplina, $tipo, $senha1);
    header("location:index.php");