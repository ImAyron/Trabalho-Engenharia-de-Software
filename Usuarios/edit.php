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
  <title>GESTMI - Disciplinas</title>
</head>

<body>


  <?php
    include "../cabecalho.php";
    include "querys.php";
  ?>

    
  <div class="fundo">

    <div class="row">
      <div class="col">
        <?php
          $u = filtroPorMatricula($_GET['matricula']);
        ?>

      </div>
      <div class="col-8">
        <div class='form-group'>
          <form action="controllerEdit.php" method="post">
            <p></p>
            <label for="cpf">CPF:</label>
            <input class="form-control" type="text" required name="cpf" id="cpf" disabled value="<?php echo($u[0][0]);?>">
            <input hidden name="cpf" id="cpf" value="<?php echo($u[0][0]);?>">
            <p></p>
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" required name="nome" id="nome" value="<?php echo($u[0][1]);?>" placeholder="Ex: João Silva" maxlength="70">
            <p></p>
            <label for="matricula">Matrícula:</label>
            <input class="form-control" type="text" name="matricula" id="matricula" value="<?php echo($u[0][2]);?>" maxlength="9">
            <p></p>
            <p></p>
            <label for="email">Email:</label>
            <input class="form-control" type="email" required name="email" id="email" placeholder="Ex: joao.couves@ufop.edu.br" value="<?php echo($u[0][3]);?>" maxlength="60">
            <p></p>
            <p></p>
            <label for="senha">Senha:</label>
            <input class="form-control" type="password" name="senha1" id="senha1" placeholder="Ex: *******" value="<?php echo($u[0][5]);?>" maxlength="30"> 
            <p></p>
            <p></p>
            <label for="disciplina">Código da disciplina:</label>
            <input class="form-control" type="text" required name="disciplina" id="disciplina" placeholder="Ex: AAA000" value="<?php echo($u[0][4]);?>" maxlength="6">
            <p></p>
            <p></p>
            <label for="tipo">Tipo de usuário:</label>
            <input class="form-control" type="text" required name="tipo" id="tipo" value="<?php echo($u[0][6]);?>" maxlength="10">
            <p></p>

            <div class="row-8">
                <input class="btn btn-warning" type="submit" value="Confirmar Edição">
                <a href="controllerDelete.php?cpf=<?php echo($u[0][0]);?>"class="btn btn-warning">Excluir</a>
            </div>

          </form>

        </div>
      </div>
      <div class="col">

      </div>

    </div>


</body>

</html>