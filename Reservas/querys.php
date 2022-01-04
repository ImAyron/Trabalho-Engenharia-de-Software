<?php

function filtroReservasPadrao($dia, $disciplina)
{
    require '../Database/conexao.php';

    if ($dia && !$disciplina) {
        $stmt = $conection->prepare("SELECT sala,diahora,cod,instrutor,nome,disciplina FROM RESERVAS INNER JOIN USUARIOS
        ON RESERVAS.instrutor = USUARIOS.cpf WHERE DATE(diahora)=:dia ORDER BY diahora");

        $stmt->bindParam(":dia", $dia);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    if (!$dia && $disciplina) {
        $stmt = $conection->prepare("SELECT sala,diahora,cod,instrutor,nome,disciplina FROM RESERVAS INNER JOIN USUARIOS
        ON RESERVAS.instrutor = USUARIOS.cpf WHERE disciplina=:disciplina ORDER BY diahora");

        $stmt->bindParam(":disciplina", $disciplina);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    if ($dia && $disciplina) {
        $stmt = $conection->prepare("SELECT sala,diahora,cod,instrutor,nome,disciplina FROM RESERVAS INNER JOIN USUARIOS
        ON RESERVAS.instrutor = USUARIOS.cpf WHERE DATE(diahora)=:dia AND disciplina=:disciplina ORDER BY diahora");

        $stmt->bindParam(":dia", $dia);
        $stmt->bindParam(":disciplina", $disciplina);
        $stmt->execute();

        return $stmt->fetchAll();
    } else {
        $stmt = $conection->prepare("SELECT sala,diahora,cod,instrutor,nome,disciplina FROM RESERVAS
        INNER JOIN USUARIOS ON RESERVAS.instrutor = USUARIOS.cpf WHERE instrutor IS NOT NULL 
        ORDER BY diahora");

        $stmt->execute();

        return $stmt->fetchAll();
    }
}

function filtroReservasDisponiveis($dia)
{
    require '../Database/conexao.php';

    if ($dia) {
        $stmt = $conection->prepare("SELECT * FROM RESERVAS WHERE DATE(diahora)=:dia AND instrutor IS NULL 
        ORDER BY diahora");

        $stmt->bindParam(":dia", $dia);
        $stmt->execute();

        return $stmt->fetchAll();
    } else {
        require '../Database/conexao.php';

        $stmt = $conection->prepare("SELECT * FROM RESERVAS WHERE instrutor IS NULL 
        ORDER BY diahora");

        $stmt->execute();

        return $stmt->fetchAll();
    }
}

function filtroMinhasReservas()
{
    require '../Database/conexao.php';

    if (session_id() == '') {
        session_start();
    }

    $stmt = $conection->prepare("SELECT sala,diahora,cod,instrutor,nome,disciplina FROM RESERVAS
    INNER JOIN USUARIOS ON RESERVAS.instrutor = USUARIOS.cpf WHERE instrutor=:cpf ORDER BY diahora");

    $stmt->bindParam(":cpf", $_SESSION['cpf']);
    $stmt->execute();

    return $stmt->fetchAll();
}

function filtroTodasReservas()
{
    require '../Database/conexao.php';

    $stmt = $conection->query("SELECT sala,diahora,cod,nome,disciplina FROM RESERVAS
    INNER JOIN USUARIOS ON RESERVAS.instrutor = USUARIOS.cpf ORDER BY diahora");

    return $stmt->fetchAll();
}

function reservarSala($cod)
{
    require '../Database/conexao.php';

    if (session_id() == '') {
        session_start();
    }

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE RESERVAS SET instrutor=:cpf WHERE cod=:cod");

        $stmt->bindParam(":cpf", $_SESSION['cpf']);
        $stmt->bindParam(":cod", $cod);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function cancelarReservaSala($cod)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE RESERVAS SET instrutor=NULL WHERE cod=:cod");

        $stmt->bindParam(":cod", $cod);
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

function deletarReserva($cod)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("DELETE FROM RESERVAS WHERE cod=:cod");

        $stmt->bindParam(":cod", $cod);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}

function filtroReservaCodigo($cod)
{
    require '../Database/conexao.php';

    $stmt = $conection->prepare("SELECT * FROM RESERVAS WHERE cod=:cod");

    $stmt->bindParam(":cod", $cod);
    $stmt->execute();

    return $stmt->fetchAll();
}

function editarReservas($sala, $diahora, $cod)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE RESERVAS SET sala=:sala, diahora=:diahora WHERE cod=:cod");

        $stmt->bindParam(":cod", $cod);
        $stmt->bindParam(":diahora", $diahora);
        $stmt->bindParam(":sala", $sala);

        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}
