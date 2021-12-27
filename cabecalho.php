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
        <button class="btn btn-warning" > <?php echo $_SESSION['nome']; ?> </button>
        <p><?php echo $_SESSION['matricula'] ?></p>
        <p><a href="/Trabalho-Engenharia-de-Software/Usuarios/logout.php">Sair</a></p>
      </div>  
    <?php
    }
    ?>

</div>

      

<div class="col " style="background-color: #FFC089;">
  <div class="row ">

    <div class="col border border-dark">

      <br>
      <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Reservas/index.php">Reservas</a>
      <br>
    </div>

    <div class="col border border-dark">
      <br>
      <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Salas/index.php">Salas</a>
      <br>
    </div>

    <div class="col border border-dark">
      <br>
      <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Instrutores/index.php">Instrutores</a>
      <br>
    </div>

    <div class="col border border-dark">
      <br>
      <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/index.php">Login</a>
      <br>
    </div>

    <?php
    if (estaLogado()) {
    ?>

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="/Trabalho-Engenharia-de-Software/Disciplinas/index.php">Disciplinas</a>
        <br>
      </div>

    <?php
    }
    ?>



  </div>
</div>
</div>
