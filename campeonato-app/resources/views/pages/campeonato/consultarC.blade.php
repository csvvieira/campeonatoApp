<x-layout titulo="Página Campeonato">
    @csrf
    <div class="card p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <h6 class="mb-0">Gerenciar Campeonato</h6>
                <small class="text-secondary">Cadastre, edite ou remova Campeonato</small>
            </div>
            <a href="/cadastrarC" class="btn btn-dark"><i class="bi bi-plus-lg me-1"></i> Novo Campeonato</a>
 
        </div>
 
        <!-- Tabela de Jogadores -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Encerramento</th>
                        <th scope="col">Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ids as $id)
                    <tr>
                        <td scope="row">{{$id->id}}</td>
                        <td scope="row">{{$id->nome}}</td>
                        <td scope="row">{{$id->dataEncerramento}}</td>
                        <td scope="row">{{$id->endereco}}</td>
                        <td class="text-end">
                            <a class="btn btn-outline-secondary btn-sm me-1" href="editarC/{{$id->id}}"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>