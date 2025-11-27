<x-layout titulo="Cadastrar Time">
    <form class="container" style="margin-top: 200px;" action="cadastrarT/salvarT" method="GET">
        @csrf
        <div class="card p-4">
            <h6>Cadastrar Time</h6>
            <p>Preencha os dados do Time para realizar o cadastro</p>
            <br>
 
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome *</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                </div>
 
                <div class="col">
                    <label class="form-label">Cidade *</label>
                    <input type="text" name="cidade" class="form-control" id="cidade">
                </div>
            </div>
 
            <div class="col" style="margin-top:20px;">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-all me-1"></i> Cadastrar</button>
 
                <a class="btn btn-secondary" type="button" href="/consultarPaginaInicialT"><i class="bi bi-arrow-left-short me-1"></i> Voltar</a>
            </div>
        </div>
    </form>
</x-layout>