<x-layout titulo="Cadastrar Jogador">
    <form class="container" action="cadastrarJ/salvarJ" method="GET">
        @csrf
        <div class="card p-4">
            <h6>Cadastrar Jogador</h6>
            <p>Preencha os dados do Jogador para realizar o cadastro</p>
            <br>
 
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome *</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                </div>
 
                <div class="col">
                    <label class="form-label">Posição *</label>
                    <input type="text" name="posicao" class="form-control" id="posicao">
                </div>
            </div>
 
            <div class="row">
                <div class="col">
                    <label class="form-label">Número *</label>
                    <input type="text" name="numero" class="form-control" id="numero">
                </div>
 
                <div class="col">
                    <label class="form-label">Idade *</label>
                    <input type="text" name="idade" class="form-control" id="idade">
                </div>
 
                <div class="col">
                    <label class="form-label">Time *</label>
                    <input type="text" name="timeNome" class="form-control" id="timeNome">
                </div>
            </div>
 
            <div class="col">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-all me-1"></i> Cadastrar</button>
 
                <a class="btn btn-secondary" type="button" href="/consultarPaginaInicialJ"><i class="bi bi-arrow-left-short me-1"></i> Voltar</a>
            </div>
        </div>
    </form>
</x-layout>