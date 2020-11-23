<?php
    session_start();
    $_SESSION['usuarioId'] = "";
    $_SESSION['tipoConta'] = "";
    $_SESSION['senha'] = "";
    header('Location: index.php');
?>