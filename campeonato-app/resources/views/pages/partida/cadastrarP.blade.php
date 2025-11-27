<x-layout titulo="Cadastrar Partida">
    <form class="container" action="cadastrarP/salvarP" method="GET">
        @csrf
        <div class="card p-4">
            <h6>Cadastrar Partida</h6>
            <p>Preencha os dados da Partida para realizar o cadastro</p>
            <br>
 
            <div class="row">
                <div class="col">
                    <label class="form-label">Data da Partida *</label>
                    <input type="date" name="dataPartida" class="form-control" id="dataPartida">
                </div>
 
                <div class="col">
                    <label class="form-label">Horario *</label>
                    <input type="time" name="horario" class="form-control" id="horario">
                </div>
 
                <div class="col">
                    <label class="form-label">Mandante *</label>
                    <input type="text" name="mandanteNome" class="form-control" id="mandanteNome">
                </div>
            </div>
 
            <div class="row">
 
                <div class="col">
                    <label class="form-label">Visitante *</label>
                    <input type="text" name="visitanteNome" class="form-control" id="visitanteNome">
                </div>
 
                <div class="col">
                    <label class="form-label">Resultado *</label>
                    <input type="text" name="resultado" class="form-control" id="resultado">
                </div>
            </div>
 
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome do Campeonato *</label>
                    <input type="text" name="campeonatoNome" class="form-control" id="campeonatoNome">
                </div>
 
                <div class="col">
                    <label class="form-label">Nome do Arbitro *</label>
                    <input type="text" name="arbitroNome" class="form-control" id="arbitroNome">
                </div>
            </div>
 
            <div class="col">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-all me-1"></i> Cadastrar</button>
 
                <a class="btn btn-secondary" type="button" href="/consultarPaginaInicialP"><i class="bi bi-arrow-left-short me-1"></i> Voltar</a>
            </div>
        </div>
    </form>
</x-layout>