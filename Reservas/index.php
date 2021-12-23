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
   <link rel=" stylesheet" type = 'text/css'  href="reserva.css"> 
  <title>GESTMI - Reservas</title>
</head>

<body>

    <?php
      include "../cabecalho.php";
    ?>
    
    <div class="fundo">

      <div class="row">
      <div class="col-1">

      </div>
      <div class="col-3">
          <div class='form-group'>
              <form action="controllerInsert.php" method="post">
                <div class="btn-group-vertical">
                  <p></p>
                 <a class="btn btn-lg btn-block btn-warning " href="create.php"><input type="button" class="btn btn-lg btn-block btn-warning " value='criar'></a>
                 <p></p>
                 <a class="btn btn-lg btn-block btn-warning " href="create.php"><input type="button" class="btn-lg btn-block btn btn-warning" value='editar'></a>
                 <p></p>
                 <a class="btn btn-lg btn-block btn-warning " href="create.php"><input type="button" class="btn btn-lg btn-block btn-warning" value='Vizualizar'></a>
                 <p></p>
                 <a class="btn btn-lg btn-block btn-warning " href="create.php"><input type="button" class="btn btn-lg btn-block  btn-warning" value='Remover'></a>
                </div> 

              </form>

          </div>
      </div>
      <div class="col">
        <img src="../predios_e_cantina.jpg" class="img-fluid" alt="Imagem responsiva">
      </div>
    </div>


</body>

</html> 