<x-layout titulo="Página Time">
    @csrf
    <div class="card p-4" >
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <h6 class="mb-0">Gerenciar Time</h6>
                <small class="text-secondary">Cadastre, edite ou remova Time</small>
            </div>
            <a href="/cadastrarT" class="btn btn-dark"><i class="bi bi-plus-lg me-1"></i> Novo Time</a>
 
        </div>
 
        <!-- Tabela de Jogadores -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ids as $id)
                    <tr>
                        <td scope="row">{{$id->id}}</td>
                        <td scope="row">{{$id->nome}}</td>
                        <td scope="row">{{$id->cidade}}</td>
                        <td class="text-end">
                            <a class="btn btn-outline-secondary btn-sm me-1" href="/editarT/{{$id->id}}"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>