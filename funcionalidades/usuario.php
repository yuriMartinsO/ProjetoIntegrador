<?php
    require 'conexao.php';

    function alterarSenha() {
        global $conexao;
        session_start();

        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);
        $senhaSecundaria = md5($_POST['senhaSecundaria']);
        $senhaAtual = md5($_POST['senhaAtual']);

        if ($senhaAtual != $_SESSION['senha']) {
            $_SESSION['msg'] = "Senha atual diferente !";
            header('Location: AlterarSenha.php');
            die;
        }

        if ($senhaSecundaria != $senha) {
            $_SESSION['msg'] = "Senhas não conferem !";
            header('Location: AlterarSenha.php');
            die;
        }

        $idUsuario = $_SESSION["usuarioId"];

        $sql = "UPDATE `usuario` SET `senha`='$senha' WHERE `id`='$idUsuario'";

        if ($conexao->query($sql) === TRUE) {
            $_SESSION['msg'] = "Senha de usuario alterado com sucesso!";
            $_SESSION['senha'] = $senha;
            header('Location: AlterarSenha.php');
        } else {
            $_SESSION['msg'] = "Erro: " . $conexao->error;
            header('Location: AlterarSenha.php');
        }
    }

    function cadastrarUsuario() {
        global $conexao;

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $tipoConta = $_POST['tipoConta'];
        $endereco = $_POST['endereco'];
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);

        $sql = "INSERT INTO usuario (nome,telefone,email,tipoConta,endereco,usuario,senha) VALUES ('$nome','$telefone','$email','$tipoConta','$endereco','$usuario','$senha')";

        if ($conexao->query($sql) === TRUE) {
            session_start();
            $_SESSION['msg'] = "Usuario registrado com sucesso!";
            header('Location: Usuarios.php');
        } else {
            session_start();
            $_SESSION['msg'] = "Erro: " . $conexao->error;
            header('Location: Usuarios.php');
        }
    }

    function alterarUsuario() {
        global $conexao;

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $tipoConta = $_POST['tipoConta'];
        $endereco = $_POST['endereco'];
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);

        $sql = "UPDATE `usuario` set `nome`='$nome',`telefone`='$telefone',`email`='$email',`tipoConta`='$tipoConta',`endereco`='$endereco',`usuario`='$usuario' ";

        if ($_POST['senha']) {
            $sql .= " ,`senha`='$senha'";
        }

        $sql .= " WHERE id=" . $_GET['id'];

        if ($conexao->query($sql) === TRUE) {
            session_start();
            $_SESSION['msg'] = "Usuario alterado com sucesso!";
            header('Location: ConsultarUsuarios.php');
        } else {
            session_start();
            $_SESSION['msg'] = "Erro: " . $conexao->error;
            header('Location: ConsultarUsuarios.php');
        }
    }

    switch($_GET['acao']) {
        case 'cadastrarUsuario':
            cadastrarUsuario();
            break;
        case 'alterarUsuario':
            alterarUsuario();
            break;
        case 'alterarSenha':
            alterarSenha();
            break;

    }
?>