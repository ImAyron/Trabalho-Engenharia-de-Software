<?php
    include 'querys.php';

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];

    editarDisciplinas($cod, $nome);
    
    header("location:view.php");