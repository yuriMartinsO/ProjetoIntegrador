<?php
    error_reporting(0);

    function checarPermissao($permissao) {
        switch($permissao) {
            case 'botaoUsuario':
                if($_SESSION['tipoConta'] == "1") {
                    echo "hide";
                }
                break;
        }
    }
?>