<?php
if (session_id() == '') {
  session_start();
}
?>


<div class="row">
  <div class="col" style="background-color: #F88011;">
    <img class="img-thumbnail" src="/Trabalho-Engenharia-de-Software/logo.jpeg" alt="">
  </div>
  <div class="col-8" style="background-color: #F88011;">
  </div>
  <?php
  if (!estaLogado()) {
  ?>
    <div class="col" style="background-color: #F88011;text-align: center;">
      <br>
      <br>
      <a href="/Trabalho-Engenharia-de-Software/Usuarios/logout.php"><button class="btn btn-warning" action="/Trabalho-Engenharia-de-Software/Usuarios/logout.php"> Logout </button></a>
      <p ><?php echo $_SESSION['matricula'] ?></p>
    </div>
  <?php
  } else {
  ?>
    <div class="col" style="background-color: #F88011;text-align: center;">
      <br>
      <br>
      <a href="/Trabalho-Engenharia-de-Software/index.php"><button class="btn btn-warning" action="/Trabalho-Engenharia-de-Software/Usuarios/logout.php"> Login </button></a>
    </div>
  <?php } ?>

</div>



<div class="col " style="background-color: #FFC089;">
  <div class="row ">

    <?php
    ///Botão Reservas usuario nao logado
    if (estalogado()) {
    ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Reservas/view.php">Reservas</a>
        <br>

      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Reservas usuario Monitor
    if (!estalogado() && (($_SESSION['tipo'] == 'MONITOR') || ($_SESSION['tipo'] == 'TUTOR')))  {
      ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Reservas/view.php">Reservas</a>
        <br>

      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Minhas Reservas usuario Monitor
    if (!estalogado() && (($_SESSION['tipo'] == 'MONITOR') || ($_SESSION['tipo'] == 'TUTOR')))  {
      ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Reservas/minhasReservas.php">Minhas Reservas</a>
        <br>

      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Reservas usuario ADMIN
    if (!estalogado() && ($_SESSION['tipo']) == 'ADMIN') {
    ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Reservas/index.php">Reservas</a>
        <br>

      </div>
    <?php
    }
    ?>


    <?php
    ///Botão Salas usuario nao logado
    if (estalogado()) {
    ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Salas/view.php">Mapa de Salas</a>
        <br>

      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Salas usuario Monitor
    if (!estalogado() && (($_SESSION['tipo'] == 'MONITOR') || ($_SESSION['tipo'] == 'TUTOR')))  {
      ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Salas/view.php">Mapa de Salas</a>
        <br>

      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Salas usuario ADMIN
    if (!estalogado() && ($_SESSION['tipo']) == 'ADMIN') {
    ?>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Salas/index.php">Salas</a>
        <br>

      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Instrutores usuario nao logado
    if (estalogado()) {
    ?>
      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Usuarios/view.php">Instrutores</a>
        <br>
      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Instrutores usuario Monitor
    if (!estalogado() && (($_SESSION['tipo'] == 'MONITOR') || ($_SESSION['tipo'] == 'TUTOR')))  {
      ?>
      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Usuarios/view.php">Instrutores</a>
        <br>
      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Instrutores usuario Admin
    if (!estalogado() && ($_SESSION['tipo']) == 'ADMIN') {
    ?>
      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Usuarios/index.php">Instrutores</a>
        <br>
      </div>
    <?php
    }
    ?>

    <?php
    ///Botão Disciplinas usuario Admin
    if (!estalogado() && ($_SESSION['tipo']) == 'ADMIN') {
    ?>

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Disciplinas/view.php">Disciplinas</a>
        <br>
      </div>

    <?php
    }
    ?>

  </div>
</div>
</div>