<?php 
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
  <link rel=" stylesheet" type='text/css' href="disciplina.css">
  <title>GESTMI - Disciplinas</title>
</head>

<body>


  <div class="row">
    <div class="col" style="background-color: #F88011;">
      <img class="img-thumbnail" src="../logo.jpeg" alt="">
    </div>
    <div class="col-6" style="background-color: #F88011;text-align:center;">
      <br>
      <br>
      <h1>Disciplinas</h1>
    </div>
    <div class="col" style="background-color: #F88011;text-align: center;">
      <br>
      <br>
      <button class="btn btn-warning"> <?php echo $_SESSION['nome']; ?> </button>
      <p><?php echo $_SESSION['matricula'] ?></p>
    </div>
  </div>
  <div class="col " style="background-color: #FFC089;">
    <div class="row ">

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../index.php">Home</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="../Reservas/index.php">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="index.php">Disciplinas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="../Reservas/index.php">Tutores</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="../Reservas/index.php">Reservas</a>
        <br>
      </div>
    </div>
  </div>
  </div>
  <div class="fundo">

    <div class="row">
      <div class="col">

      </div>
      <div class="col-8">
        <div class='form-group'>
          <form action="controllerInsert.php" method="post">
            <p></p>
            <label for="numero">Código da Disciplina:</label>
            <input class="form-control" type="text" name="id" id="id">
            <p></p>
            <label for="num_assentos">Nome da disciplina:</label>
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