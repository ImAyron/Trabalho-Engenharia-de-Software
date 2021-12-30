<?php
    include 'querys.php';

    $sala = $_POST['sala'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $horarioDividido = explode(" ", $hora);
    $hora = $horarioDividido[0];
    $hora = $hora.":00";
    //echo $hora;

    $timeStamp = $dia." ".$hora;
    //$timeStamp = "1970-01-01 15:00:01";
    echo $timeStamp;
    echo $sala;

    inserirReserva($sala, $timeStamp);
    
    header("location:index.php");