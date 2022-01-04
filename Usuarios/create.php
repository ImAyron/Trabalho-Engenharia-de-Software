<?php
include "../Usuarios/loginFunctions.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="reserva.css">
  <title>GESTMI - Usuarios</title>
</head>

<body>


  <?php
  include "../cabecalho.php";
  ?>


  <div class="fundo">

    <div class="row">
      <div class="col">

      </div>
      <div class="col-8">
        <div class='form-group'>
          <form action="controllerInsert.php" method="post">
            <p></p>
            <label for="cpf">CPF:</label>
            <input class="form-control" type="text" required name="cpf" id="cpf" placeholder="Ex: 000.000.000-00" maxlength="14">
            <p></p>
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" required name="nome" id="nome" placeholder="Ex: João das Couves" maxlength="70">
            <p></p>
            <p></p>
            <label for="matricula">Matricula:</label>
            <input class="form-control" type="text" required name="matricula" id="matricula" placeholder="Ex: 00.0.0000" maxlength="9">
            <p></p>
            <p></p>
            <label for="email">Email:</label>
            <input class="form-control" type="email" required name="email" id="email" placeholder="Ex: joao.couves@ufop.edu.br" maxlength="60">
            <p></p>
            <p></p>
            <label for="senha">Senha:</label>
            <input class="form-control" type="password" required name="senha1" id="senha1" placeholder="Ex: *******" maxlength="30">
            <p></p>
            <p></p>
            <label for="disciplina">Código da disciplina:</label>
            <select class="form-control" name="disciplina" id="disciplina">
              <option selected disabled>Selecione a Disciplina</option>
              <?php
              include_once "../Disciplinas/querys.php";

              foreach (filtroDisciplinasPadrao() as $disc) {

                echo '<option class="form-control">' . $disc['cod'] . '</option>';
              }
              ?>
            </select>
            <p></p>
            <p></p>
            <label for="tipo">Tipo de usuário:</label>
            <select class="form-control" name="disciplina" id="disciplina">
              <option selected disabled>Selecione a tipo</option>
              <option>MONITOR</option>
              <option>TUTOR</option>
            </select>
            <p></p>

            <input class="btn btn-warning" type="submit" value="Confirmar Inserção">


          </form>

        </div>
      </div>
      <div class="col">

      </div>

    </div>


</body>

</html>