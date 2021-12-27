<<<<<<< HEAD
=======
<?php 
  require "../Usuarios/loginFunctions.php";
  session_start();
?>

>>>>>>> 12212954bafb6749971b1823a9d1ba08cd90f8fa
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

<<<<<<< HEAD

  <div class="row">
    <div class="col" style="background-color: #F88011;">
      <img class="img-thumbnail" src="../logo.jpeg" alt="">
    </div>
    <div class="col-6" style="background-color: #F88011;text-align:center;">
      <br>
      <br>
      <h1>Reservas</h1>
    </div>
    <div class="col" style="background-color: #F88011;text-align: center;">
      <br>
      <br>
      <button class="btn btn-warning"> Ayron </button>
      <p>19.1.8065</p>
    </div>
  </div>
  <div class="col " style="background-color: #FFC089;">
    <div class="row ">

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../index.html">Home</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="reservas.html">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="reservas.html">Disciplinas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="reservas.html">Tutores</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="index.html">Reservas</a>
        <br>
      </div>
    </div>
  </div>
=======
  <?php
    require "../cabecalho.php"
  ?>

>>>>>>> 12212954bafb6749971b1823a9d1ba08cd90f8fa
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
<<<<<<< HEAD

            <label for="tipo">Horário</label>
                    <select class="form-control" name="tipo" id="tipo">
                        
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
=======
            <label for="num_assentos">Horário:</label>
            <input class="form-control" type="text" name="sid" id="sid">
            <p></p>


>>>>>>> 12212954bafb6749971b1823a9d1ba08cd90f8fa
            <input class="btn btn-warning" type="submit" value="Confirmar Inserção">


          </form>

        </div>
      </div>
      <div class="col">

      </div>

    </div>


</body>

</html>