<?php

    function dataFormatter($data){
        $dataFinal = '';
        $horaFinal = '';
        
        $horaFinal = explode(" ", $data)[1];
        $horaFinal = explode(":", $horaFinal);
        $horaFinal =  $horaFinal[0] . ":". $horaFinal[1];

        
        $dataNoFormat = explode(" ", $data)[0];
        $dataFinal = explode("-", $dataNoFormat);
        $dataFinal = $dataFinal[2] ."/".$dataFinal[1] ."/".$dataFinal[0] ;
        
        return [$dataFinal,$horaFinal];
    }