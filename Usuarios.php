<?php
    session_start();
    require 'checarSessaoLogin.php';
?>
<html>
    <head>
        <title>Cadastrar um Usuário</title>
        
        <script>
            var msg = "<?=$_SESSION['msg']?>";
            if(msg) {
                alert(msg);
            }
            <?php
                $_SESSION['msg'] = "";
            ?>
        </script>

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
            .formulario form {
                margin-top: 24px;
            }
            .formulario .big-box {
                width: 757px;
                margin-bottom: 26px;
                background: #f2f2f2;
            }
            .formulario .big-box .texto-big-box {
                text-align: center;
                padding-top: 15px;
            }
            .formulario .big-box .texto-area {
                padding-bottom: 47px;
            }
            .formulario .big-box .texto-area textarea {
                width: 550px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 13px;
                height: 172px;
            }
            .botaoContainer {
                text-align: center;
            }
            .botaoContainer button {
                width: 320px;
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
                        <li class="botao" style="background:#992fad;margin-right: 305px;">
                            <a href="ConsultarUsuarios.php" class="link">
                                <div>CONSULTAR OU ALTERAR USUÁRIOS</div>
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
            <div>Cadastro de Usuários</div>
        </div>
        <div class="formulario">
            <form action="action.php?acao=cadastrarUsuario" method="POST">
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto">
                            Nome:
                        </div>
                    </div>
                    <div class="campo" style="width: 396px;margin-right: 61px;">
                        <input name="nome" class="form-control" type="text" placeholder="Nome Completo do Usuário">
                    </div>
                    <div class="texto-container">
                        <div class="texto">
                            Telefone:
                        </div>
                    </div>
                    <div class="campo" style="width: 212px;">
                        <input name="telefone" class="form-control" type="text" placeholder="(11)999999999">
                    </div>
                </div>
                <div class="campo-form">
                    <div class="campo-form">
                        <div class="texto-container">
                            <div class="texto" style="margin-right: 28px;">
                                Email:
                            </div>
                        </div>
                        <div class="campo" style="width: 295px;margin-right: 16px;">
                            <input name="email" class="form-control" type="text" placeholder="Email do Usuário">
                        </div>
                    </div>
                    <div class="campo-form">
                        <div class="texto-container">
                            <div class="texto" style="margin-right: 37px;">
                                Tipo de Conta:
                            </div>
                        </div>
                        <div class="campo" style="width: 261px;">
                        <select name="tipoConta" class="form-control">
                            <option value="1">Usuário</option>
                            <option value="2">Consultor</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="campo-form">
                    <div class="texto-container">
                        <div name="" class="texto" style="margin-right: 28px;">
                            Endereço:
                        </div>
                    </div>
                    <div class="campo" style="width: 676px;">
                        <input name="endereco" class="form-control" type="text" placeholder="Endereço do Usuário">
                    </div>
                </div>
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto">
                            Usuário:
                        </div>
                    </div>
                    <div class="campo" style="width: 300px;">
                        <input name="usuario" class="form-control" type="text" placeholder="Usuário">
                    </div>
                    <div class="texto-container">
                        <div class="texto" style="margin-left: 12px;margin-right: 58px;">
                            Senha:
                        </div>
                    </div>
                    <div class="campo" style="width: 291px;">
                        <input name="senha" class="form-control" type="text" placeholder="********">
                    </div>
                </div>
                <div class="search-container text-center">
                    <div class="search-button-cont">
                        <button type="submit" class="btn btn-info" style="width: 186px;">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>