<?php
    include 'querys.php';

    $cod = $_GET['cod'];


    reservarSala($cod);
    
    header("location:view.php");