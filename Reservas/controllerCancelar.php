<?php
    include 'querys.php';

    $cod = $_GET['cod'];

    cancelarReservaSala($cod);
    
    header("location:minhasReservas.php");