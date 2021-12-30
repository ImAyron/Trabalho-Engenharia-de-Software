<?php

function filtroReservasPadrao($dia, $disciplina)
{
    require 'Database/conexao.php';

    $stmt = $conection->prepare("SELECT * FROM RESERVAS WHERE DATE(diahora)=:dia AND instrutor IN 
        (SELECT cpf FROM USUARIOS WHERE disciplina=:disciplina) ORDER BY diahora");

    $stmt->bindParam(":dia", $dia);
    $stmt->bindParam(":disciplina", $disciplina);
    $stmt->execute();

    return $stmt->fetchAll();
}

function filtroReservasDisponiveis($dia)
{
    require 'Database/conexao.php';

    $stmt = $conection->prepare("SELECT * FROM RESERVAS WHERE DATE(diahora)=:dia AND instrutor IS NULL 
    ORDER BY diahora");

    $stmt->bindParam(":dia", $dia);
    $stmt->execute();

    return $stmt->fetchAll();
}

function filtroMinhasReservas()
{
    require 'Database/conexao.php';

    if (session_id() == '') {
        session_start();
    }

    $stmt = $conection->prepare("SELECT * FROM RESERVAS WHERE instrutor=:cpf ORDER BY diahora");

    $stmt->bindParam(":cpf", $_SESSION['cpf']);
    $stmt->execute();

    return $stmt->fetchAll();
}

function filtroTodasReservas($dia)
{
    require 'Database/conexao.php';

    $stmt = $conection->query("SELECT * FROM RESERVAS ORDER BY diahora");

    return $stmt->fetchAll();
}

function reservarSala($codigo)
{
    require 'Database/conexao.php';

    if (session_id() == '') {
        session_start();
    }

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE RESERVAS SET instrutor=:cpf WHERE cod=:codigo");

        $stmt->bindParam(":cpf", $_SESSION['cpf']);
        $stmt->bindParam(":cod", $codigo);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function cancelarReservaSala($codigo)
{
    require 'Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE RESERVAS SET instrutor=NULL WHERE cod=:codigo");

        $stmt->bindParam(":cod", $codigo);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function inserirReserva($sala, $timeStamp)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("INSERT INTO RESERVAS (sala, diahora) VALUES (:sala, :diahora)");

        $stmt->bindParam(":sala", $sala);
        //$stmt->bindParam(":dh", $dia.' '.$hora);
        $stmt->bindParam(":diahora", $timeStamp);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro na inserção! " . $error->getMessage());
    }
}

function deletarReserva($codigo)
{
    require 'Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("DELETE FROM RESERVAS WHERE cod=:codigo");

        $stmt->bindParam(":cod", $codigo);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}
