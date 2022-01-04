<?php

function filtroInstrutoresPadrao()
{
    require '../Database/conexao.php';

    $stmt = $conection->query("SELECT nome, matricula, email, disciplina FROM USUARIOS EXCEPT
    SELECT nome, matricula, email, disciplina FROM USUARIOS WHERE tipo = 'ADMIN' ORDER BY disciplina");

    return $stmt->fetchAll();
}

function filtroSalas()
{
    require '../Database/conexao.php';

    $stmt = $conection->query("SELECT cod FROM SALAS ORDER BY cod");

    return $stmt->fetchAll();
}

function inserirSala($cod)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("INSERT INTO SALAS (cod)
        VALUES (:cod)");

        $stmt->bindParam(":cod", $cod);

        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarSala($cod)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("DELETE FROM SALAS WHERE cod=:cod");

        $stmt->bindParam(":cod", $cod);

        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}