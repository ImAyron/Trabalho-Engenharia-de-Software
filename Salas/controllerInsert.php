<?php
    include 'querys.php';

    $cod = $_POST['cod'];
    inserirSala($cod);
    
    header("location:index.php");