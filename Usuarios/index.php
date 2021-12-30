<?php
require "loginFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="reserva.css">
  <title>GESTMI - Usuários</title>
</head>

<body>

  <?php
    require "../cabecalho.php"
  ?>

  <div class="fundo">

    <div class="row">
      <div class="col-2">
      <br>
      <a class="btn btn-warning" href="create.php">
        <input type="button" class="btn btn-warning" value='Novo Usuário'>
      </a>
      </div>
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Disciplina</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "querys.php";
              foreach (filtroInstrutoresPadrao() as $u){
            ?>
            <tr>
              <td><?php echo $u['nome']?></td>
              <td><?php echo $u['email']?></td>
              <td><?php echo $u['disciplina']?></td>
              <td><a href="edit.php?matricula=<?php echo($u['matricula'])?>"><input type="button" value='editar'></a></td>
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