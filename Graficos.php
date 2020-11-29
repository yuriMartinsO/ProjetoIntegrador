<?php
    session_start();
    require 'checarSessaoLogin.php';
    require 'funcionalidades/conexao.php';
?>
<html>
    <head>
        <title>Gráficos</title>
        
        <script>
            var msg = "<?=$_SESSION['msg']?>";
            if(msg) {
                alert(msg);
            }
            <?php
                $_SESSION['msg'] = "";
            ?>
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <style>
            .header-cont {
                max-width: 900px;
                margin-left: auto;
                margin-right: auto;
                display: flex;
            }
            .header-cont .logo {
                width: 100px;
                height: 119px;
                margin-left: 55px;
            }
            .header-cont .logo img {
                margin-top: 26px;
            }
            .header-cont .submenu {
                width: 900px;
                margin-top: 9px;
            }
            .header-cont .submenu .mensagem {
                text-align: center;
                width: 679px;
            }
            .header-cont .submenu .lista-botoes {
                list-style: none;
                display: flex;
                margin-top: 0;
                padding-left: 0;
            }
            .header-cont .submenu .lista-botoes .botao {
                cursor: pointer;
                width: 80px;
                height: 80px;
                margin: 8px;
                text-align: center;
                border: 1px solid;
                font-size: 10px;
                font-weight: bolder;
            }
            .header-cont .submenu .lista-botoes .botao:hover {
                opacity: .8;
            }
            .header-cont .submenu .lista-botoes .botao:hover a {
                color: white;
            }
            .header-cont .submenu .lista-botoes .botao a {
                text-decoration: none;
                color: black;
            }
            .header-cont .submenu .lista-botoes .botao div {
                margin-top: 34px;
                height: 55px;
            }
            .titulo-bloco {
                margin-left: auto;
                margin-right: auto;
                width: 813px;
            }
            .titulo-bloco div {
                background: #bed0da;
                height: 34px;
                border: 1px solid;
                max-width: 753px;
                margin-top: 8px;
                margin-left: 22px;
                line-height: 32px;
                text-align: center;
            }
            .formulario .campo-form {
                display: flex;
                margin-top: 11px;
                margin-bottom: 21px;
            }
            .texto-container .texto {
                margin-top: 6px;
                margin-right: 76px;
            }
            .formulario {
                margin-left: auto;
                margin-right: auto;
                width: 770px;
            }
        </style>
    </head>

    <body>
        <div class="header-cont">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="submenu">
                <div class="mensagem">
                    Seja bem vindo ao menu de acesso, escolha um item:
                </div>
                <div class="botoes-menu">
                    <ul class="lista-botoes">
                        <li class="botao" style="background: #fd9728;">
                            <a href="Usuarios.php" class="link">
                                <div>NOVO USUÁRIO</div>
                            </a>
                        </li>
                        <li class="botao" style="background:#992fad;">
                            <a href="ConsultarUsuarios.php" class="link">
                                <div>CONSULTAR OU ALTERAR USUÁRIOS</div>
                            </a>
                        </li>
                        <li class="botao" style="background:#decf1b;margin-right: 207px;">
                            <a href="Graficos.php" class="link">
                                <div>GRÁFICOS</div>
                            </a>
                        </li>
                        <li class="botao" style="background: green;">
                            <a href="NovoTicket.php" class="link">
                                <div>VOLTAR</div>
                            </a>
                        </li>
                        <li class="botao" style="background: #e2202b;">
                            <a href="Sair.php" class="link">
                                <div>SAIR</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="titulo-bloco">
            <div>Graficos</div>
        </div>
        <div class="formulario">
            <div class="graficos">
                <?php require 'graficos/abertosFechados.php'?>
                <?php require 'graficos/ticketsPorUsuario.php'?>
            </div>
        </div>
    </body>
</html>