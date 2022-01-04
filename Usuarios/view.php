<?php
require "loginFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="reserva.css">
  <title>GESTMI - Instrutores</title>
</head>

<body>

  <?php
    require "../cabecalho.php";
    $filtroDisciplina = null;
  ?>

  <div class="fundo">

    <div class="row">
      <div class="col-2">

      </div>
      <div class="col">

      <br>
        <form action="view.php" method="post">
          <div class="row">
            <div class="col-auto">
              <input placeholder="Disciplina" type="text" class="form-control" name="disciplina" value="<?= $filtroDisciplina ?>">
            </div>

            <div class="col-auto">
              <input type="submit" class="btn btn-warning" value='Filtrar'>
            </div>

            <form action="view.php" method="post">
              <div class="col-auto">
                <input hidden type="date" class="form-control" name="dataa" value="<?= $filtroDisciplina = null ?>">
              </div>
              <div class="col-auto">
                <input type="submit" class="btn btn-warning" value='Limpar Filtro'>
              </div>
            </form>

          </div>
        </form>
        <br>

        <table class="table table-striped table-warning table-bordered">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Disciplina</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "querys.php";
              foreach (filtroInstrutoresPadrao((isset($_POST['disciplina']) ? strtoupper($_POST['disciplina']) : null)) as $u){
            ?>
            <tr>
              <td><?php echo $u['nome']?></td>
              <td><?php echo $u['email']?></td>
              <td><?php echo $u['disciplina']?></td>
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