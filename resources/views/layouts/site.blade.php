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

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ url('assets/css/site/style.min.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <div class="nav-item">
                            <a class="nav-link" href="/"><img src="assets/img/site/logo-padrao.png" alt=""></a>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="#">Leilões</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Vender</a></li>

                        <li>
                            <div class="search-wrapper">
                                <input type="search" id="search" placeholder=" Pesquisa">
                                <img src="assets/img/site/search.png" alt="">
                            </div>
                        </li>
                        {{-- MARKET DROPDOWN --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/site/globe.png" alt="">Market
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <h6>PAÍS</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                        href="#">PORTUGAL</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <h6>IDIOMA</h6>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li><a class="dropdown-item" href="#">PORTUGUÊS</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li><a class="dropdown-item" href="#">INGLÊS</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">MOÇAMBIQUE</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <h6>IDIOMA</h6>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">PORTUGUÊS</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">INGLÊS</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">ANGOLA</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <h6>IDIOMA</h6>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">PORTUGUÊS</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">INGLÊS</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">ESPANHA</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <h6>IDIOMA</h6>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li><a class="dropdown-item" href="#">PORTUGUÊS</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li><a class="dropdown-item" href="#">INGLÊS</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/site/user.png" alt="">LOGIN
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <h6>Catarina Silva<br>25986489</h6>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">A MINHA CONTA</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">LOTES FAVORITOS</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">CALENDÁRIO</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">AS MINHAS COMPRAS</a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">RESUMO ENCOMENDAS</a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">FECHAR SESSÃO</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        {{-- OFFCANVAS --}}
                        <li>
                            <a href="#sidebar" class="d-block " data-bs-toggle="offcanvas" role="button"
                                aria-controls="sidebar">
                                <img src="assets/img/site/menu.png" alt="">
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>


    </header>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li>
                    <h6>OLÁ</h6>
                </li>
                <li>
                    <a href="#">LOGIN / REGISTO</a>
                </li>
                <li>
                    <a href="#">CONTATOS</a>
                </li>
                <li>
                    <a href=" #">LEILÕES</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <h6>CATEGORIAS</h6>
                </li>
                <li>
                    <a href=" #">LOGIN / REGISTO</a>
                </li>
                <li>
                    <a href=" #">IMÓVEIS</a>
                </li>
                <li>
                    <a href=" #">VEÍCULOS</a>
                </li>
                <li>
                    <a href=" #">EQUIPAMENTOS</a>
                </li>
                <li>
                    <a href=" #">ARTE</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li>
                    <h6>OUTROS</h6>
                </li>
                <li>
                    <a href=" #">BLOG</a>
                </li>
                <li>
                    <a href=" #">IMPRENSA ONLINE</a>
                </li>
                <li>
                    <a href=" #">DIAS DE VISITA</a>
                </li>
                <li>
                    <a href=" #">VENDER EM LEILÃO</a>
                </li>
                <li>
                    <a href=" #">AJUDA E SUPORTE</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
    <div class="vcl">
        <div class="bloco-1">
            <p class="titulo">VENDA COM A LEILOSOC®</p>
            <p>Receba uma avaliação dos seus bens em 4 etapas.</p>
            <div class="estimativa mt-4">
                <a class="btn btn-outline-light">OBTER ESTIMATIVA</a>
            </div>
            <p class="mt-4">Precisa de ajuda? Seleccione uma das opções.</p>
            <div class="atalhos ">
                <a class="btn" href="#">IMÓVEIS →</a>
                <a class="btn" href="#">VEÍCULOS →</a>
                <a class="btn" href="#">EQUIPAMENTOS →</a>
                <a class="btn" href="#">ARTE →</a>
            </div>
        </div>
        <div class="bloco-2">
            <div class="p">
                <img src="{{ url('assets/img/site/Ativo 10.png') }}" alt="">
                <p>ENVIE INFORMAÇÃO SOBRE O BEM QUE QUER VENDER</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="links-footer">
            <div class="link-util">
                <ul>
                    <li>
                        <h1>Leilosoc</h1>
                    </li>
                    <li>
                        <a href="">Sobre a Leilosoc</a>
                    </li>
                    <li>
                        <a href="">Desinvestimento</a>
                    </li>
                    <li>
                        <a href="">Centro Logistico</a>
                    </li>
                    <li>
                        <a href="">Recuperação de Empresas</a>
                    </li>
                    <li>
                        <a href="">Grupo Isegoria Capital</a>
                    </li>
                    <li>
                        <a href="">Publicidade</a>
                    </li>
                    <li>
                        <a href="">FAQs</a>
                    </li>
                    <li>
                        <a href="">Contatos</a>
                    </li>
                </ul>
            </div>
            <div class="link-util">
                <ul>
                    <li>
                        <h1>Comprar e Vender</h1>
                    </li>
                    <li>
                        <a href="">Como Comprar</a>
                    </li>
                    <li>
                        <a href="">Código de Boas Práticas Comerciais</a>
                    </li>
                    <li>
                        <a href="">Como Vender</a>
                    </li>
                    <li>
                        <a href="">Dicas de Fotografias</a>
                    </li>
                </ul>
            </div>
            <div class="link-util">
                <ul>
                    <li>
                        <h1>Termos E Condições</h1>
                    </li>
                    <li class="nav-item">
                        <a href="">Condições Gerais de Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Política da Privacidade</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Política da Qualidade</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Política de Cookies</a>
                    </li>
                    <li class="nav-item">
                        <a href="">RGPD</a>
                    </li>
                    <li>
                        <a href="">livro de Reclamações Online</a>
                    </li>
                </ul>
            </div>
            <div class="newsletters">
                <div class="titulo-footer">
                    <h1>Fique Informado Diariamente <br> com as nossas newsletters</h1>
                </div>
                <form action="">
                    <p>Subscreva já e receba o que a Leilosoc® tem de melhor para lhe oferecer no seu email.</p>
                    <input name="news" type="email" placeholder=" Preencha o seu email">
                    <label for="news">
                        SUBSCREVA
                    </label>
                    <p>Ao subscrever a newsletter, concordo que meus dados sejam usados para fins
                        de marketing, incluindo comunicações por e-mail e marketing de terceiros.</p>
                </form>
            </div>
        </div>
        <div class="footer">
            <div>
                <img src="assets/img/site/footer.png" alt="">
            </div>
            <div class="direitos">
                <p>© LEILOSOC® Todos os direitos reservados | LEILÕES.PT</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/site/script.js"></script>
</body>

</html>
