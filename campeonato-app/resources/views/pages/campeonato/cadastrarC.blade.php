<x-layout titulo="Cadastrar Campeonato">
    <form class="container" action="cadastrarC/salvarC" method="GET">
        @csrf
        <div class="card p-4" style="margin-top: 200px;">
            <h6>Cadastrar Campeonato</h6>
            <p>Preencha os dados do Campeonato para realizar o cadastro</p>
            <br>

            <div class="row">
                <div class="col">
                    <label class="form-label">Nome *</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                </div>

                <div class="col">
                    <label class="form-label">Data de Encerramento *</label>
                    <input type="date" name="dataEncerramento" class="form-control" id="dataEncerramento">
                </div>

                <div class="col">
                    <label class="form-label">Endereço *</label>
                    <input type="text" name="endereco" class="form-control" id="endereco">
                </div>
            </div>

            <div class="col">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-all me-1"></i> Cadastrar</button>

                <a class="btn btn-secondary" type="button" href="/consultarPaginaInicialC"><i class="bi bi-arrow-left-short me-1"></i> Voltar</a>
            </div>
        </div>
    </form>
</x-layout>