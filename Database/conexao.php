<?php

// CONFIGURAÇÃO COM O BANCO DE DADOS
$endereco='localhost';
$banco='Gestmi';
$usuario='postgres';
$senha='';


try{

    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    //echo "Conectando no banco de dados !!! <br>";
}
    catch(PDOException $e){
        echo 'falha na conexão com o banco de dados';
        die($e->getMessage());
}
