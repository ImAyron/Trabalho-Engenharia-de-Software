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
  <link rel=" stylesheet" type='text/css' href="salas.css">
  <title>GESTMI - Salas</title>
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
            <label for="cod">Código da Sala:</label>
            <input class="form-control" type="text" required name="cod" maxlength="4" minlength="4" placeholder="Ex: A101">
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