<?php
    include 'querys.php';

    $cod = $_GET['cod'];
    //echo($cod);
    //echo($diahora);

    deletarReserva($cod);
    
    header("location:index.php");