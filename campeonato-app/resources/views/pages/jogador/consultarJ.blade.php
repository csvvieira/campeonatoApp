<x-layout titulo="Página Jogador">
    @csrf
    <div class="card p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <h6 class="mb-0">Gerenciar Jogadores</h6>
                <small class="text-secondary">Cadastre, edite ou remova Jogadores</small>
            </div>
            <a href="/cadastrarJ" class="btn btn-dark"><i class="bi bi-plus-lg me-1"></i> Novo Jogador</a>
 
        </div>
 
        <!-- Tabela de Jogadores -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Posição</th>
                        <th scope="col">Número</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ids as $id)
                    <tr>
                        <td scope="row">{{$id->id}}</td>
                        <td scope="row">{{$id->nome}}</td>
                        <td scope="row">{{$id->posicao}}</td>
                        <td scope="row">{{$id->numero}}</td>
                        <td scope="row">{{$id->idade}}</td>
                        <td scope="row">{{$id->timeNome}}</td>
                        <td class="text-end">
                            <a class="btn btn-outline-secondary btn-sm me-1" href="/editarJ/{{$id->id}}"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>