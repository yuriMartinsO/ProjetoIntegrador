<?php
    error_reporting(0);

    function verificarTipoConsultarTickets() {
        $tipo = $_GET['alterar'];

        if ($tipo == 'sim') {
            require 'Alterar.php';
        } else {
            require 'Consultar.php';
        }
    }
?>