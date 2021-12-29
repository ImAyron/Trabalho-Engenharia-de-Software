<?php
    include 'querys.php';

    $cod = $_GET['cod'];

    deletarDisciplinas($cod);
    
    header("location:view.php");