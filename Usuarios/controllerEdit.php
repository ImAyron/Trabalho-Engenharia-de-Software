<?php
    include 'querys.php';

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha1 = $_POST['senha1'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];
    $cpf = $_POST['cpf'];

    updateUserData($nome, $matricula, $email, $senha1, $disciplina, $tipo, $cpf);
    
    header("location:index.php");