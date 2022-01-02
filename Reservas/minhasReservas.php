<?php
require "../Usuarios/loginFunctions.php";
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
    require "../cabecalho.php"
  ?>
     
      
    </div>
    <div class="fundo">

    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sala</th>
              <th scope="col">Dia/Hora</th>
              <th scope="col">Instrutor</th>
              <th scope="col">Código</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "querys.php";
              foreach (filtroMinhasReservas() as $u){
            ?>
            <tr>
              <td><?php echo $u['sala']?></td>
              <td><?php echo $u['diahora']?></td>
              <td>
                <?php 
                  if ($u['instrutor'] == null){
                    echo ("livre");
                  } else {
                    echo $u['instrutor'];
                  }
                ?>
              </td>
              <td><?php echo $u['cod']?></td>
              <td><a href="cancel.php?cod=<?php echo($u['cod'])?>"><input type="button" value='Cancelar'></a></td>
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