<?php 
    if(session_id() == '') {
        session_start();
    }

    session_unset();         
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['matricula']);

   echo "<script>alert('Deslogado!!!'); location.replace('../index.php');</script>";

