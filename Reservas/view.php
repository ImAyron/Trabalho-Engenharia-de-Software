<?php
require "../Usuarios/loginFunctions.php";
require '../Database/conexao.php';

if (session_id() == '') {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="reserva.css">
  <title>GESTMI - Reservas</title>
</head>

<body>

  <?php
  require "../cabecalho.php";
  $filtroData = null;
  $filtroDisciplina = null;
  ?>


  </div>
  <div class="fundo">

    <div class="row">
      <div class="col">

      </div>
      <div class="col-8">
        <br>
        <form action="view.php" method="post">
          <div class="row">
            <div class="col-auto">
              <input type="date" class="form-control" name="data" value="<?= $filtroData ?>">
            </div>

            <div class="col-auto">
              <input placeholder="Disciplina" type="text" class="form-control" name="disciplina" value="<?= $filtroDisciplina ?>">
            </div>

            <div class="col-auto">
              <input type="submit" class="btn btn-warning" value='Filtrar'>
            </div>

            <form action="view.php" method="post">
              <div class="col-auto">
                <input hidden type="date" class="form-control" name="dataa" value="<?= $filtroData = null ?>">
              </div>
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
        <br>
        <table class="table table-striped table-warning table-bordered">
          <thead>
            <tr>
              <th scope="col">Sala</th>
              <th scope="col">Dia/Hora</th>
              <th scope="col">Instrutor</th>
              <th scope="col">Código</th>
              <?php
              if (!estaLogado()) {
              ?>
                <th scope="col"></th>
              <?php
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
            require "querys.php";
            require_once "../helper.php";
            if (!estaLogado()) {
              //Se o usuario estiver logado ele vai conseguir ver as reservas livres e o botão reservar
              foreach (filtroReservasDisponiveis((isset($_POST['data']) ? $_POST['data'] : null)) as $u) {
            ?>
                <tr>
                  <td><?php echo $u['sala'] ?></td>
                  <td><?php $timestamp = dataFormatter($u['diahora']);
                      echo $timestamp[0] . "\t\t" . $timestamp[1] ?></td>
                  <td>
                    <?php
                    if ($u['instrutor'] == null) {
                      echo ("Livre");
                    } else {
                      echo $u['instrutor'];
                    }
                    ?>
                  </td>
                  <td><?php echo $u['cod'] ?></td>
                  <td>
                    <a href="controllerReservar.php?cod=<?php echo ($u['cod']) ?>"><input type="button" class="btn btn-warning" value='Reservar'></a>
                  </td>

                </tr>
              <?php
              }
            } else {
              //Se o não usuario estiver logado ele só vai ver as reservas ocupadas
              foreach (filtroReservasPadrao((isset($_POST['data']) ? $_POST['data'] : null), (isset($_POST['disciplina']) ? strtoupper($_POST['disciplina']) : null)) as $u) {
              ?>
                <tr>
                  <td><?php echo $u['sala'] ?></td>
                  <td><?php $timestamp = dataFormatter($u['diahora']);
                      echo $timestamp[0] . "\t\t" . $timestamp[1] ?></td>
                  <td>
                    <?php
                    if ($u['instrutor'] == null) {
                      echo ("Livre");
                    } else {
                      echo $u['nome'];
                    }
                    ?>
                  </td>
                  <td><?php echo $u['disciplina'] ?></td>
              <?php
              }
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