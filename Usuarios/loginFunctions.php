<?php

    function estaLogado(){
        if (session_id() == '') {
            session_start();
        }
        if (!isset($_SESSION['nome']) || empty($_SESSION['nome'])) {
            return true;
        }
        return false;
    }