<?php
    require 'conexao.php';

    function alterarTicket() {
        global $conexao;

        $dataInicio = str_replace("/", "-", $_POST['dataInicio']);
        $dataInicio = str_replace(" ", "", $dataInicio);
        $dataIncio = date("Y-m-d", strtotime($dataInicio));

        $nomeContato = $_POST['nomeContato'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $titulo = $_POST['titulo'];
        $solicitacao = $_POST['solicitacao'];
        $usuario = $_POST['usuario']; $usuario = 1;
        $status = $_POST['status'];
        $id = $_GET['id'];

        $sql = "UPDATE `ticket` SET `dataInicio`='$dataIncio', `nomeContato`='$nomeContato', `telefone`='$telefone', `email`='$email',`titulo`='$titulo', `solicitacao`='$solicitacao', `usuario`='$usuario', `status`='$status' WHERE `id`='$id'";

        if ($conexao->query($sql) === TRUE) {
            session_start();
            $_SESSION['msg'] = "Ticket alterado com sucesso!";
            header('Location: ConsultarTickets.php');
        } else {
            $_SESSION['msg'] = "Erro: " . $conexao->error;
            header('Location: ConsultarTickets.php');
        }
    }

    function novoTicket() {
        global $conexao;

        $dataInicio = str_replace("/", "-", $_POST['dataInicio']);
        $dataInicio = str_replace(" ", "", $dataInicio);
        $dataIncio = date("Y-m-d", strtotime($dataInicio));

        $nomeContato = $_POST['nomeContato'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $titulo = $_POST['titulo'];
        $solicitacao = $_POST['solicitacao'];
        $usuario = $_POST['usuario']; $usuario = 1;
        $status = $_POST['status'];

        $sql = "INSERT INTO ticket (`dataInicio` , `nomeContato`,`telefone`,`email`,`titulo`,`solicitacao`,`usuario`,`status`) VALUES ('$dataIncio','$nomeContato','$telefone','$email','$titulo','$solicitacao','$usuario','$status')";

        if ($conexao->query($sql) === TRUE) {
            session_start();
            $_SESSION['msg'] = "Ticket registrado com sucesso!";
            header('Location: NovoTicket.php');
        } else {
            $_SESSION['msg'] = "Erro: " . $conexao->error;
            header('Location: NovoTicket.php');
        }

    }

    switch($_GET['acao']) {
        case 'novoTicket':
            novoTicket();
            break;
        case 'alterarTicket':
            alterarTicket();
            break;
    }
?>