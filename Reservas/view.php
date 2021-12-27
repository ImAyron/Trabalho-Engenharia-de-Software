<?php
require "../Usuarios/loginFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="reserva.css">
  <title>Document</title>
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
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Dia</th>
              <th scope="col">Horário</th>
              <th scope="col">Sala</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Ayron</td>
              <td>26/11</td>
              <td>21:30:00</td>
              <td>A302</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Kevin</td>
              <td>25/12</td>
              <td>24:00:00</td>
              <td>B401</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Lucas</td>
              <td>01/01</td>
              <td>10:21:00</td>
              <td>C302</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2">

      </div>

    </div>


</body>

</html>