<?php
    include 'querys.php';

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];
    $cpf = $_POST['cpf'];

    //echo($nome."|".$matricula."|".$email."|".$disciplina."|".$tipo);

    updateUserData($nome, $matricula, $email, $senha, $disciplina, $tipo, $cpf);
    
    header("location:index.php");