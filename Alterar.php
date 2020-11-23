<?php
    require 'checarSessaoLogin.php';
    require 'funcionalidades/conexao.php';

    global $conexao;

    $id = $_GET['id'];

    $sql = "SELECT * FROM `ticket` WHERE `id` LIKE '%$id%'";
    $result = $conexao->query($sql);

    $ticket = null;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $ticket = $row;
        }
    }

    $statusTicket = [
        $ticket['status'] => "selected"
    ];
    
?>
    
    <style>
         .formulario .botoes-form {
            text-align: center;
            text-align: center;
            padding-bottom: 44px;
            padding-top: 30px;
        }
        .formulario .botoes-form button {
            width: 140px;
            border: 1px solid;
        }
        .formulario .botoes-form button:first-child {
            margin-right: 51px;
            background: #a6dba7;
        }
        .formulario .botoes-form button:nth-child(2) {
            background: #ec9da2;
        }
    </style>
    
    <script type="text/javascript" src="main.js"></script>

    <div class="titulo-bloco">
        <div>Alterar</div>
    </div>
    <div class="formulario">
        <form action="action.php?acao=alterarTicket&id=<?=$ticket['id']?>" method="POST">
            <div class="campo-form">
                <div class="texto-container">
                    <div class="texto">
                        Início:
                    </div>
                </div>
                <div class="campo" style="width: 161px;">
                    <input value="<?=$ticket['dataInicio']?>" name="dataInicio" class="form-control" type="date" placeholder="DD/MM/AAAA">
                </div>
                <div class="texto-container">
                    <div class="texto" style="margin-left: 94px;">
                        Status:
                    </div>
                </div>
                <div class="campo" style="width: 124px;">
                    <select name="status" class="form-control">
                        <option value="1" <?=$statusTicket[1]?>>Aberto</option>
                        <option value="0" <?=$statusTicket[0]?>>Finalizado</option>
                    </select>
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
                        <input value="<?=$ticket['nomeContato']?>" name="nomeContato" class="form-control" type="text" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto">
                            Telefone:
                        </div>
                    </div>
                    <div class="campo" style="width: 124px;">
                        <input value="<?=$ticket['telefone']?>" name="telefone" class="form-control" type="text" placeholder="(11)999999999">
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
                    <input value="<?=$ticket['email']?>" name="email" class="form-control" type="email" placeholder="Inclua mais emails para participar e/ou acompanhar o ticket">
                </div>
            </div>
            <div class="campo-form">
                <div class="texto-container">
                    <div class="texto" style="margin-right: 28px;">
                        Título:
                    </div>
                </div>
                <div class="campo" style="width: 622px;margin-right: 16px;">
                    <input value="<?=$ticket['titulo']?>" name="titulo" class="form-control" type="text" placeholder="Deseja definir um título/assunto para este ticket? (opcional)">
                </div>
            </div>
            <div class="big-box">
                <div class="texto-big-box">
                    Adicione mais detalhes a solicitação
                </div>
                <div class="texto-area">
                    <textarea name="solicitacao" class="form-control" rows="3"><?=$ticket['solicitacao']?></textarea>
                </div>
            </div>
            <div class="botoes-form">
                <button type="submit" class="btn">Alterar</button>
                <button type="reset" class="btn"><a href="ConsultarTickets.php">Cancelar</a></button>
            </div>
        </form>
    </div>

    <script>
        // fazerDataMascara("dataInicio");
    </script>
    <?php $_SESSION['tipo'] = 'consultar'?>