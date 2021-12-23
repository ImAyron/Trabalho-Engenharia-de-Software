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
  <title>Document</title>
</head>

<body>

  <?php
    require "../cabecalho.php"
  ?>

  </div>
  <div class="fundo">

    <div class="row">
      <div class="col">

      </div>
      <div class="col-8">
        <div class='form-group'>
          <form action="controllerInsert.php" method="post">
            <p></p>
            <label for="numero">Sala:</label>
            <input class="form-control" type="text" name="id" id="id">
            <p></p>
            <label for="num_assentos">Dia:</label>
            <input class="form-control" type="text" name="sid" id="sid">
            <p></p>
            <label for="num_assentos">Horário:</label>
            <input class="form-control" type="text" name="sid" id="sid">
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