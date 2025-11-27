<x-layout titulo="Editar Time">
    <form class="d-flex justify-content-center align-items-center" style="margin-top: 200px;" action="../atualizarT/{{$dado->id}}" method="GET">
        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <label for="">Código: </label>
                    <input class="form-control" type="number" id="id" name="id" value="{{$dado->id}}" disabled required><br><br>
                </div>
            </div>
 
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome *</label>
                    <input type="text" name="nome" class="form-control" id="nome" value="{{$dado->nome}}">
                </div>
 
                <div class="col">
                    <label class="form-label">Cidade *</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" value="{{$dado->cidade}}">
                </div>
            </div>
 
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-all me-1"></i> Atualizar</button>
                        <a class="btn btn-secondary" href="/consultarPaginaInicialT"><i class="bi bi-arrow-left-short me-1"></i> Voltar</a>
 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash me-1"></i>
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
        </div>
 
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Deseja excluir o dado?: {{$dado->id}}?</h6>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-success" href="/excluirT/{{$dado->id}}">Sim</a>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout>