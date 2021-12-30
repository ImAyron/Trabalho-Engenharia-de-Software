<?php 
  require "../Usuarios/loginFunctions.php";
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
  <title>GESTMI - Reservas</title>
</head>

<body>

  <?php
    require "../cabecalho.php"
  ?>

  </div>
  <div class="fundo">

    <div class="row">
      <div class="col">
        <?php
          include_once "querys.php";
          $u = filtroReservaCodigo($_GET['cod']);
        ?>

      </div>
      <div class="col-8">
        <div class='form-group'>
          <form action="controllerEdit.php" method="post">
            <p></p>
            <label for="sala">Sala:</label>
            <input class="form-control" type="text" required name="sala" id="sala" value="<?php echo($u[0][3]);?>">
            <p></p>
            <label for="dia">Dia:</label>
            <input class="form-control" type="date" required name="dia" id="dia" value="<?php echo($u[0][1]);?>">
            <p></p>
            <input hidden type="text" name="cod" id="cod" value="<?php echo($u[0][0])?>">

            <label for="hora">Horário</label>
                    <select class="form-control" name="hora" id="hora" value="<?php echo($u[0][1]);?>">
                        
                        <option>13:00 - 13:50</option>
                        <option>14:00 - 14:50</option>
                        <option>15:00 - 15:50</option>
                        <option>16:00 - 16:50</option>
                        <option>19:00 - 19:50</option>
                        <option>20:00 - 20:50</option>
                        <option>21:00 - 21:50</option>
                        <option>22:00 - 22:50</option>

                    </select>
            <br>

            <div class="row-8">
              <input class="btn btn-warning" type="submit" value="Confirmar Edição">
              <a href="controllerDelete.php?cod=<?php echo($u[0][0]);?>"class="btn btn-warning">Excluir</a>
            </div>

          </form>

        </div>
      </div>
      <div class="col">

      </div>

    </div>


</body>

</html>