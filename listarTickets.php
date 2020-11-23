<?php 
    $hide = $_GET['status'] ?: "hide";
?>

<style>
    table, th, td {
        border: 1px solid black;
    }
    table th {
        text-align: center;
        padding-bottom: 11px;
        padding-top: 10px;
        background: #a5ddf8;
    }
    table td {
        padding-top: 15px;
        text-align: center;
        max-height: 34px;
        font-size: 10px;
        padding-bottom: 13px;
        padding-left: 4px;
        padding-right: 4px;
    }
</style>
<table class="<?=$hide?>">
    <tr>
        <th style="width: 60px;">Ticket</th>
        <th style="width: 93px;">Data/Hora</th>
        <th style="width: 244px;">Aberto Por</th>
        <th style="width: 213px;">Título</th>
        <th style="width: 87px;">Status</th>
        <th style="width: 62px;">Ação</th>
    </tr>
    <?php

        function listar() {
            $status = $_GET['status'];

            if (!$status) {
                return false;
            }

            global $conexao;

            if ($_GET['dataInicio']) {
               $dataInicio = str_replace("/", "-", $_GET['dataInicio']);
               $dataInicio = str_replace(" ", "", $dataInicio);
               $dataIncio = date("Y-m-d", strtotime($dataInicio));
            }
            if ($_GET['dataFim']) {
                $dataFim = str_replace("/", "-", $_GET['dataFim']);
                $dataFim = str_replace(" ", "", $dataFim);
                $dataFim  = date("Y-m-d", strtotime($dataFim));
            }

            $idTicket = $_GET['id'];
            $nome = $_GET['nome'];

            if($dataIncio || $dataFim || $idTicket || $nome || $status == 'fechados' || $status == 'abertos') {
                $where = " WHERE ";
            }

            $ValorWhere = [];

            if ($dataIncio) {
                $ValorWhere[] = ["`dataInicio`", ">=", "'$dataIncio'"];
            }
            if ($dataFim) {
                $ValorWhere[] = ["`dataInicio`", "<=", "'$dataFim'"];
            }
            if ($idTicket) {
                $ValorWhere[] = ["`id`", "=", "'$idTicket'"];
            }

            if ($status !== 'todos') {        
                $statusDeTicket = [
                    'todos' => 'todos',
                    'abertos' => 1,
                    'fechados' => 0
                ];

                $ValorWhere[] = ["`status`", "=" , "'$statusDeTicket[$status]'"];
            }

            if ($nome) {
                $ValorWhere[] = ["`nomeContato`", "LIKE", "'%$nome%'"];
            }

            foreach($ValorWhere as $w) {
                $where .= " {$w[0]} {$w[1]} {$w[2]} AND";
            }

            $where = substr($where,0,-3);

            $sql = "SELECT * FROM `ticket` $where";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    require 'listaTickets.php';
                }
            }
        }

        if ($_GET['status']) {
            listar();
        }
    ?>
</table>
