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
  <link rel=" stylesheet" type='text/css' href="salas.css">
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
              <th scope="col">Código da sala</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "querys.php";
              foreach (filtroSalas() as $u){
            ?>
            <tr>
              <td><?php echo $u['cod']?></td>
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