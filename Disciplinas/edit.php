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
  <link rel=" stylesheet" type='text/css' href="disciplina.css">
  <title>GESTMI - Disciplinas</title>
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
          <form action="controllerEdit.php" method="post">
            <p></p>
            <div class="col-4">
              <label for="cod">Editando a disciplina:</label>
              <input class="form-control" type="text" name="cod" id="cod" disabled value="<?= $_GET['cod'] ?>">
            </div>
            <p></p>
            <label for="nome">Nome da disciplina:</label>
            <input class="form-control" type="text" required name="nome" id="nome" maxlength="60" placeholder="Ex: Engenharia de Software">
            <p></p>
            <input type="hidden" name="cod" value="<?= $_GET['cod'] ?>" />
            <div class="row-8">
              <input class="btn btn-warning" type="submit" value="Confirmar Edição">
              <a href="controllerDelete.php?cod=<?php echo ($_GET['cod']); ?>" class="btn btn-warning">Excluir</a>
            </div>

          </form>

        </div>
      </div>
      <div class="col">

      </div>

    </div>


</body>

</html>