<?php
$acao = $_GET['acao'];

switch($acao) {
    case 'novoTicket':
        require 'funcionalidades/ticket.php';
        break;
    case 'alterarTicket':
        require 'funcionalidades/ticket.php';
    case 'preencherTicket':
        require 'funcionalidades/ticket.php';
    case 'alterarSenha':
        require 'funcionalidades/usuario.php';
        break;
    case 'cadastrarUsuario':
        require 'funcionalidades/usuario.php';
        break;
    case 'preencherUsuario':
        require 'funcionalidades/usuario.php';
        break;
    case 'alterarUsuario':
        require 'funcionalidades/usuario.php';
        break;
}
?>