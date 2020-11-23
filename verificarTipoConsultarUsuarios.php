<?php
    error_reporting(0);

    function verificarTipoConsultarUsuarios() {
        $tipo = $_GET['alterar'];

        if ($tipo == 'sim') {
            require 'AlterarUsuario.php';
        } else {
            require 'ConsultarUsuario.php';
        }
    }
?>