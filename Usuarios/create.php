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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <input class="form-control" type="text" name="cpf" id="cpf">
            <p></p>
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
            <p></p>
            <p></p>
            <label for="matricula">Matricula:</label>
            <input class="form-control" type="text" name="matricula" id="matricula">
            <p></p>
            <p></p>
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" id="email">
            <p></p>
            <p></p>
            <label for="senha">Senha:</label>
            <input class="form-control" type="text" name="senha" id="senha">
            <p></p>
            <p></p>
            <label for="disciplina">Código da disciplina:</label>
            <input class="form-control" type="text" name="disciplina" id="disciplina">
            <p></p>
            <p></p>
            <label for="tipo">Tipo de usuário:</label>
            <input class="form-control" type="text" name="tipo" id="tipo">
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