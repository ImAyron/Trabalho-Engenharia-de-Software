<?php
    include 'querys.php';

    $cod = $_GET['cod'];

    deletarSala($cod);
    
    header("location:index.php");