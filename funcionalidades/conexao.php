<?php
error_reporting(0);

$servidor = "localhost";
$nomeUsuario = "root";
$senha = "";
$bancoDeDados = "ProjetoIntegrador";

// Create connection
$conexao = new mysqli($servidor, $nomeUsuario, $senha, $bancoDeDados);
?>