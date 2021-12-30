<?php
    include 'querys.php';

    $cpf = $_GET['cpf'];

    deletarUsuarios($cpf);
    
    header("location:index.php");