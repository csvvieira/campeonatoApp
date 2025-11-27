<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap');
    </style>
    <title>{{$titulo}}</title>
</head>

<body style="font-family: 'Onest';">
    <header class="app-header py-3" style="background-color: green;">
        <div class="container-xl d-flex align-items-center justify-content-between">
            <div class="d-flex justify-content-center align-items-center">
                <img src="../images/logotipo.png" width="70px" alt="Logotipo do Campeonato entre Amigos">
                <div>
                    <h5 style="margin-left: 20px;color:white; margin-bottom:0px;">Campeonato Entre Amigos</h5>
                </div>
            </div>

            <div class="d-none d-md-flex align-items-center gap-3">
                <div class="text-end">
                    <ul class="nav nav-pills gap-2">
                        <li class="nav-item">
                            <a class="btn btn-success" href="/consultarPaginaInicialJ"><i class="bi bi-people me-1"></i> Jogador</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="/consultarPaginaInicialT"><i class="bi bi-people-fill me-1"></i> Time</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="/consultarPaginaInicialC"><i class="bi bi-trophy-fill me-1"></i> Campeonato</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="/consultarPaginaInicialP"><i class="bi bi-cookie me-1"></i> Partida</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <diV>
            {{$slot}}
        </div>
    </main>
</body>

</html>