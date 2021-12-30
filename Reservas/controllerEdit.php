<?php
    include 'querys.php';

    $sala = $_POST['sala'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $horarioDividido = explode(" ", $hora);
    $hora = $horarioDividido[0];
    $hora = $hora.":00";
    $cod = $_POST['cod'];

    $timeStamp = $dia." ".$hora;
    echo $timeStamp;
    echo $sala;

    editarReservas($sala, $timeStamp, $cod);
    
    header("location:index.php");