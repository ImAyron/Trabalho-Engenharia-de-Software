<?php
    include 'querys.php';

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];

    inserirDisciplinas($cod, $nome);
    
    header("location:view.php");