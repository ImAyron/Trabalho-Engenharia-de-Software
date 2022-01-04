<?php

function filtroDisciplinasPadrao()
{
    require '../Database/conexao.php';

    $stmt = $conection->query("SELECT cod, nome FROM DISCIPLINAS ORDER BY cod");

    return $stmt->fetchAll();
}

function inserirDisciplinas($cod, $nome)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("INSERT INTO DISCIPLINAS (cod,nome)
        VALUES (:cod,:nome)");

        $stmt->bindParam(":cod", $cod);
        $stmt->bindParam(":nome", $nome);

        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function editarDisciplinas($cod, $nome)
{
    require '../Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE DISCIPLINAS SET nome=:nome WHERE cod=:cod");

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":cod", $cod);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarDisciplinas($cod)
{
    require '../Database/conexao.php';
    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("DELETE FROM DISCIPLINAS WHERE cod=:cod");

        $stmt->bindParam(":cod", $cod);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}