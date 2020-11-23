<?php
    global $conexao;

    $id = $_GET['id'];

    $sql = "SELECT * FROM `usuario` WHERE `id` = '$id'";
    $result = $conexao->query($sql);

    $usuario = null;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $usuario = $row;
        }
    }

    $tipoUsuario = [
        $usuario['tipoConta'] => "selected"
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
<div class="titulo-bloco">
    <div>Alteração de Cadastro de Usuários</div>
</div>
<div class="formulario">
    <form action="action.php?acao=alterarUsuario&id=<?=$usuario['id']?>" method="POST">
        <div class="campo-form">
            <div class="texto-container">
                <div class="texto">
                    Nome:
                </div>
            </div>
            <div class="campo" style="width: 396px;margin-right: 61px;">
                <input value="<?=$usuario['nome']?>" name="nome" class="form-control" type="text" placeholder="Nome Completo do Usuário">
            </div>
            <div class="texto-container">
                <div class="texto">
                    Telefone:
                </div>
            </div>
            <div class="campo" style="width: 212px;">
                <input value="<?=$usuario['telefone']?>" name="telefone" class="form-control" type="text" placeholder="(11)999999999">
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
                    <input value="<?=$usuario['email']?>" name="email" class="form-control" type="text" placeholder="Email do Usuário">
                </div>
            </div>
            <div class="campo-form">
                <div class="texto-container">
                    <div class="texto" style="margin-right: 37px;">
                        Tipo de Conta:
                    </div>
                </div>
                <div class="campo" style="width: 261px;">
                <select name="tipoConta" name="" class="form-control">
                    <option value="1" <?=$tipoUsuario[1]?>>Usuário</option>
                    <option value="2" <?=$tipoUsuario[2]?>>Consultor</option>
                </select>
                </div>
            </div>
        </div>
        <div class="campo-form">
            <div class="texto-container">
                <div class="texto" style="margin-right: 28px;">
                    Endereço:
                </div>
            </div>
            <div class="campo" style="width: 676px;">
                <input value="<?=$usuario['endereco']?>" name="endereco" class="form-control" type="text" placeholder="Endereço do Usuário">
            </div>
        </div>
        <div class="campo-form">
            <div class="texto-container">
                <div class="texto">
                    Usuário:
                </div>
            </div>
            <div class="campo" style="width: 300px;">
                <input value="<?=$usuario['usuario']?>" name="usuario" class="form-control" type="text" placeholder="Usuário">
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
        <div class="botoes-form">
            <button type="submit" class="btn">Alterar</button>
            <button type="reset" class="btn"><a href="ConsultarUsuarios.php">Cancelar</a></button>
        </div>
    </form>
</div>