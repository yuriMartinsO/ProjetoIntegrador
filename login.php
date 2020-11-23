<?php
    session_start();
    require 'funcionalidades/conexao.php';

    global $conexao;

    $login = $_POST['login'];

    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM `usuario` WHERE `usuario`='$login' AND `senha`='$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION['usuarioId'] = $row['id'];
            $_SESSION['tipoConta'] = $row['tipoConta'];
            $_SESSION['senha'] = $row['senha'];
            header('Location: NovoTicket.php');
        }
    } else {
        $_SESSION['msg'] = "Senha ou Usuario incorreta";
        header('Location: Sair.php');
    }
?>