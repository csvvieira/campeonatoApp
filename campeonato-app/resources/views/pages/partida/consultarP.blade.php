<x-layout titulo="Página Partida">
    @csrf
    <div class="card p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <h6 class="mb-0">Gerenciar Partidas</h6>
                <small class="text-secondary">Cadastre, edite ou remova Partidas</small>
            </div>
            <a href="/cadastrarP" class="btn btn-dark"><i class="bi bi-plus-lg me-1"></i> Nova Partida</a>
 
        </div>
 
        <!-- Tabela de Jogadores -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Data da Partida</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Mandante</th>
                        <th scope="col">Visitante</th>
                        <th scope="col">Resultado</th>
                        <th scope="col">Campeonato</th>
                        <th scope="col">Arbitro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ids as $id)
                    <tr>
                        <td scope="row">{{$id->id}}</td>
                        <td scope="row">{{$id->dataPartida}}</td>
                        <td scope="row">{{$id->horario}}</td>
                        <td scope="row">{{$id->mandanteNome}}</td>
                        <td scope="row">{{$id->visitanteNome}}</td>
                        <td scope="row">{{$id->resultado}}</td>
                        <td scope="row">{{$id->campeonatoNome}}</td>
                        <td scope="row">{{$id->arbitroNome}}</td>
                        <td class="text-end">
                            <a class="btn btn-outline-secondary btn-sm me-1" href="/editarP/{{$id->id}}"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>