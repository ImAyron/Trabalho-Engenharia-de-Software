<?php
include "../Usuarios/loginFunctions.php";
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
    require "../cabecalho.php"
  ?>

  <div class="fundo">

    <div class="row">
      <div class="col-2">

      </div>
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Código da Disciplina</th>
              <th scope="col">Nome</th>
              <th><a class="btn btn-lg btn-block btn-warning border border-dark" href="create.php"><input type="button" class="btn btn-lg btn-block btn-warning " value='criar'></a></th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "querys.php";
              foreach (filtroDisciplinasPadrao() as $u){
            ?>
            <tr>
              <td><?php echo $u['cod']?></td>
              <td><?php echo $u['nome']?></td>
              <td><a>Editar</a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-2">

      </div>

    </div>


</body>

</html>