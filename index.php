<?php
require "./Usuarios/loginFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="trab.css">
  <title>GESTMI</title>
</head>

<body>

  <?php
    require "cabecalho.php"
  ?>
  
  <div class="fundo">

    <div class="row">
      <div class="col">

      </div>

      <div class="col">
        <div>
          <br>
          <br>

        </div>
        <img class="rounded mx-auto d-block" src="logo.jpeg" alt="">

        <?php
        if (estaLogado()) {
        ?>

          <form action='./Usuarios/loginBanco.php' method='post'>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Lembrar Senha</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>

        <?php
        }
        ?>
        

      </div>
      <div class="col">

      </div>
    </div>
  </div>


</body>

</html>