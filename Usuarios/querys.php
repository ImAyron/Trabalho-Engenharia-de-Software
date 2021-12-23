<?php

function filtroInstrutoresPadrao()
{
    require 'Database/conexao.php';

    $stmt = $conection->query("SELECT nome, matricula, email, disciplina FROM USUARIOS EXCEPT
    SELECT nome, matricula, email, disciplina FROM USUARIOS WHERE tipo = 'ADMIN' ORDER BY disciplina");

    return $stmt->fetchAll();
}

function updateUserData($nome, $matricula, $email, $discipina, $tipo)
{
    require 'Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE USUARIOS SET 
        nome=:nome, matricula=:matricula, email=:email, discipina=:discipina, tipo=:tipo
        WHERE cpf=:cpf");

        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":matricula", $matricula);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":discipina", $discipina);
        $stmt->bindParam(":tipo", $tipo);

        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function inserirReserva($cpf, $nome, $matricula, $email, $discipina, $tipo)
{
    require 'Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("INSERT INTO USUARIOS (nome,matricula,email,discipina,tipo,cpf)
        VALUES (:nome,:matricula,:email,:discipina,:tipo,:cpf)");

        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":matricula", $matricula);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":discipina", $discipina);
        $stmt->bindParam(":tipo", $tipo);

        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarReserva($cpf)
{
    require 'Database/conexao.php';
    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("DELETE FROM USUARIOS WHERE cpf=:cpf");

        $stmt->bindParam(":cpf", $cpf);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}

function trocarSenha($novasenha)
{
    require 'Database/conexao.php';

    try {

        $conection->beginTransaction();

        $stmt = $conection->prepare("UPDATE USUARIOS SET senha=:novasenha WHERE cpf=:cpf");

        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":novasenha", $novasenha);
        $stmt->execute();

        $conection->commit();
    } catch (Exception $error) {
        $conection->rollBack();
        die("Erro! " . $error->getMessage());
    }
}
