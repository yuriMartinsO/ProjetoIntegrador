<?php
    error_reporting(0);

    session_start();
    if (!$_SESSION['usuarioId']) {
        header('Location: Sair.php');
    }
?>