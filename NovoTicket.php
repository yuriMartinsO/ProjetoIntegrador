<?php
    session_start();
    require 'checarSessaoLogin.php';
    require 'checarPermissao.php';
?>
<html>
    <head>
        <title>Novo Ticket</title>
        
        <script type="text/javascript" src="main.js"></script>

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
                            <a href="NovoTicket.php" class="link">
                                <div>NOVO TICKET</div>
                            </a>
                        </li>
                        <li class="botao" style="background: #999999;">
                            <a href="AlterarSenha.php" class="link">
                                <div>ALTERAR A SENHA</div>
                            </a>
                        </li>
                        <li class="botao <?php checarPermissao("botaoUsuario")?>" style="background: #1cdaf2;">
                            <a href="Usuarios.php" class="link">
                                <div>USUÁRIOS</div>
                            </a>
                        </li>
                        <li class="botao" style="background:#992fad;">
                            <a href="ConsultarTickets.php" class="link">
                                <div>CONSULTAR OU ALTERAR TICKETS</div>
                            </a>
                        </li>
                        <li class="botao" style="background: #1daaf1;">
                            <a href="Sobre.php" class="link">
                                <div>SOBRE NÓS</div>
                            </a>
                        </li>
                        <li class="botao" style="background: #cccccc;">
                            <a href="Termos.php" class="link">
                                <div>TERMOS DE USO</div>
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
            <div>DADOS DO ATENDIMENTO</div>
        </div>
        <div class="formulario">
            <form action="action.php?acao=novoTicket" method="POST">
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto">
                            Início:
                        </div>
                    </div>
                    <div class="campo" style="width: 156px;">
                        <input id="dataInicio" name="dataInicio" class="form-control" value="<?=date("Y-m-d")?>" type="date" placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <div class="campo-form">
                    <div class="campo-form">
                        <div class="texto-container">
                            <div class="texto" style="margin-right: 28px;">
                                Contato/Nome:
                            </div>
                        </div>
                        <div class="campo" style="width: 295px;margin-right: 16px;">
                            <input name="nomeContato" class="form-control" type="text" placeholder="Nome Completo">
                        </div>
                    </div>
                    <div class="campo-form">
                        <div class="texto-container">
                            <div class="texto">
                                Telefone:
                            </div>
                        </div>
                        <div class="campo" style="width: 124px;">
                            <input name="telefone" class="form-control" type="text" placeholder="(11)999999999">
                        </div>
                    </div>
                </div>
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto" style="margin-right: 28px;">
                            Email:
                        </div>
                    </div>
                    <div class="campo" style="width: 622px;margin-right: 16px;">
                        <input name="email" class="form-control" type="email" placeholder="Inclua mais emails para participar e/ou acompanhar o ticket">
                    </div>
                </div>
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto" style="margin-right: 28px;">
                            Título:
                        </div>
                    </div>
                    <div class="campo" style="width: 622px;margin-right: 16px;">
                        <input name="titulo" class="form-control" type="text" placeholder="Deseja definir um título/assunto para este ticket? (opcional)">
                    </div>
                </div>
                <div class="big-box">
                    <div class="texto-big-box">
                        Descreva sua solicitação
                    </div>
                    <div class="texto-area">
                        <textarea name="solicitacao" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <input class="hide" name="status" value="1">
                <div class="botaoContainer">
                    <button type="submit" class="btn btn-default">Abrir chamado</button>
                </div>
            </form>
        </div>
        
        <script>
            $(function() {
                inputs = $("input");
                textArea = $("textarea");
                setInterval(function(){
                    inputs.each(function(){
                        if(!$(this).val()) {
                            $(this).css("background","#cecdcd");
                        } else {
                            $(this).css("background","white");
                        }
                    });
                    if (!textArea.val()) {
                        textArea.css("background","#cecdcd");
                    } else {
                        textArea.css("background","white");
                    }
                } ,200);
                // fazerDataMascara("dataInicio");
            });
        </script>
    </body>
</html>