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
    <link rel="stylesheet" href="{{ url('assets/css/layouts/style.min.css') }}">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo-padrao.png" alt="">
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
                                    <img src="assets/img/group.png" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Leilões
                                    <img src="assets/img/group.png" alt="">
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
                                    <img src="assets/img/logout.png" alt="">
                                </span>
                            </div>
                            <div class="ft-user">
                                <img src="assets/img/avatar.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="titulo">
            <h1>Olá, Rute seja bem vinda!</h1>
        </div>
        <div class="icones">
            <div class="itens">
                <a href="">
                    <img src="assets/img/banner.png" alt="...">
                    <div class="card-body">
                        <p class="card-text">Cadastrar <br> Banners</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/leilao.png" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ver leilões em Andamento</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/calendario.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ver todos calendários</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Cadastrar Usuários</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/noticias.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Cadastrar <br> Notícias</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/conf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Configurações do site</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/modulos.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Módulos <br> do Site</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/analytics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ver analycts do site</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/seo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Configurações de SEO</p>
                    </div>
                </a>
            </div>
            <div class="itens">
                <a href="">
                    <img src="assets/img/world.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ver site <br> Online</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
