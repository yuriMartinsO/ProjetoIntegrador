<div class="titulo-bloco">
    <div>Cadastro de Usuários</div>
</div>
<div class="formulario">
    <form method="GET">
        <div class="campo-form">
            <div class="texto-container">
                <div class="texto">
                    Nome:
                </div>
            </div>
            <div class="campo" style="width: 396px;margin-right: 61px;">
                <input name="nome" class="form-control" type="text" placeholder="Nome do Usuário">
            </div>
        </div>
        <div class="search-container text-center">
            <div class="search-button-cont">
                <button type="submit" class="btn btn-info" style="width: 186px;">Pesquisar</button>
            </div>
        </div>
    </form>
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
    <?php require 'listarUsuarios.php'?>
</div>
