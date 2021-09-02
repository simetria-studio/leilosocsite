<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leilosoc</title>
    {{-- fontes --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/backoffice/style.min.css') }}">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/painel">
                        <img src="{{ url("assets/img/backoffice/logo-padrao.png") }} " alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gerenciar
                                    <img src="{{ url("assets/img/backoffice/group.png") }} " alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Leilões
                                    <img src="{{ url("assets/img/backoffice/group.png") }} " alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Calendários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Usuários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Leads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notícias</a>
                            </li>
                        </ul>
                        <div class="login">
                            <div class="ola">
                                <span>Olá, Rute Monteiro</span>
                            </div>
                            <div class="vector">
                                <span>
                                    <img src="{{ url("assets/img/backoffice/logout.png") }} " alt="">
                                </span>
                            </div>
                            <div class="ft-user">
                                <img src="{{ url("assets/img/backoffice/avatar.png") }} " alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
