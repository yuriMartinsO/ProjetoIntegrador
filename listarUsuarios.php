<?php 
    $hide = $_GET['nome'] ?: "hide";
?>


<table class="<?=$hide?>">
    <tr>
        <th style="width: 427px;">Nome do usuário</th>
        <th style="width: 130px;">Usuário</th>
        <th style="width: 122px;">Tipo de Conta</th>
        <th style="width: 77px;">Alterar</th>
    </tr>
    <?php
        function listar() {
            global $conexao;

            $nome = $_GET['nome'];

            $sql = "SELECT * FROM `usuario` WHERE `nome` LIKE '%$nome%'";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    require 'listaUsuario.php';
                }
            }
        }

        if ($hide) {
            listar();
        }
    ?>
</table>
