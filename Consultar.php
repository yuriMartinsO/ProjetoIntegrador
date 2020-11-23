    <script type="text/javascript" src="main.js"></script>
    <div class="titulo-bloco">
        <div>Consultar Tickets</div>
    </div>
    <div class="formulario">
        <form method="GET">
            <div class="campo-form">
                <div class="texto-container">
                    <div class="texto">
                        Início:
                    </div>
                </div>
                <div class="campo" style="width: 196px;">
                    <input id="dataInicio" name="dataInicio" class="form-control" type="date" placeholder="Período: Início">
                </div>
                <div class="texto-container">
                    <div class="texto" style="margin-left: 32px;">
                        Fim:
                    </div>
                </div>
                <div class="campo" style="width: 196px;">
                    <input id="dataFim" name="dataFim" class="form-control" type="date" placeholder="Período: Fim">
                </div>
            </div>
            <div class="campo-form">
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto" style="margin-right: 28px;">
                            Ticket:
                        </div>
                    </div>
                    <div class="campo" style="width: 295px;margin-right: 16px;">
                        <input name="id" class="form-control" type="text" placeholder="Número do ticket">
                    </div>
                </div>
                <div class="campo-form">
                    <div class="texto-container">
                        <div class="texto" style="margin-right: 37px;">
                            Status:
                        </div>
                    </div>
                    <div class="campo" style="width: 261px;">
                    <select name="status" class="form-control">
                        <option value="todos">Abertos e Finalizados (Todos)</option>
                        <option value="abertos">Somente Abertos (Pendentes)</option>
                        <option value="fechados">Somente finalizados (Concluídos)</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="campo-form">
                <div class="texto-container">
                    <div class="texto" style="margin-right: 28px;">
                        Aberto por:
                    </div>
                </div>
                <div class="campo" style="width: 622px;margin-right: 16px;">
                    <input name="nome" class="form-control" type="text" placeholder="Nome do Contato">
                </div>
            </div>
            <div class="search-container text-center">
                <div class="search-button-cont">
                    <button type="submit" class="btn btn-info" style="width: 186px;">Pesquisar</button>
                </div>
            </div>
        </form>
        <?php require 'listarTickets.php'?>
    </div>

    <script>
        // fazerDataMascara("dataInicio");
        // fazerDataMascara("dataFim");
    </script>