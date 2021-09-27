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
    <link rel="stylesheet" href="{{ url('assets/css/site/myleilosoc/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/site/includes_css/header.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/site/includes_css/footer.min.css') }}">
</head>

@extends('layouts.site')
@section('content')

    <body>
        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  mt-3">
                    <li class="breadcrumb-item"><a href="/">Leilosoc</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>


            <div class="usuario">
                <div class="d-flex">
                    <div class="logo">
                        <h6>My <span>Leilosoc® |</span></h6>
                    </div>
                    <div class="perfil">
                        <div class="img-perfil">
                            <img src="" alt="">
                        </div>
                        <div class="name-user">
                            <h6>Olá Ana <span>[ID 12674943]</span></h6>
                        </div>
                    </div>
                </div>
                <div class="reveja">
                    <h6>REVEJA AS CONDIÇÕES <br> GERAIS DE VENDA</h6>
                </div>
            </div>



            <div class="content mb-5">

                <div class="topo">
                    <div class="square">
                        <a href="" class="btn">
                            <ion-icon name="today"></ion-icon>
                        </a>
                        <div>
                            <span>CALENDÁRIO <br> DE LEILÕES</span>
                        </div>
                    </div>
                    <div class="square">
                        <a href="/myleilosoc/interesses" class="btn">
                            <ion-icon name="today"></ion-icon>
                        </a>
                        <div class="faq">
                            <span>OS MEUS <br> INTERESSES</span>
                            <div class="faq-item">
                                <p>lotes <span class="badge bg-info text-white">6</span></p>
                            </div>
                        </div>

                    </div>
                    <div class="square">
                        <a href="" class="btn">
                            <ion-icon name="today"></ion-icon>
                        </a>
                        <div class="faq">
                            <span>AS MINHAS <br> LICITAÇÕES</span>
                            <div class="faq-item">
                                <p>lotes <span class="badge bg-info text-white">6</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <a href="" class="btn">
                            <ion-icon name="today"></ion-icon>
                        </a>
                        <div class="faq">
                            <span>HISTÓRICO</span>
                            <div class="faq-item">
                                <p>lotes <span class="badge bg-info text-white">6</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <a href="" class="btn">
                            <ion-icon name="today"></ion-icon>
                        </a>
                        <div class="faq">
                            <span>FATURAS</span>
                            <div class="faq-item">
                                <p>lotes <span class="badge bg-info text-white">6</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lateral">
                    <div>
                        <a href="/myleilosoc/perfil-settings" class="btn">
                            <ion-icon name="person"></ion-icon>
                            <div>
                                <h1>Perfil Settings</h1>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="/myleilosoc/dados-pessoais" class="btn">
                            <ion-icon name="person"></ion-icon>
                            <div>
                                <h1>Dados Pessoais</h1>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="btn">
                            <ion-icon name="person"></ion-icon>
                            <div>
                                <h1>EMAIL <br> E NOTIFICAÇÕES</h1>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="btn">
                            <ion-icon name="person"></ion-icon>
                            <div>
                                <h1>CONDIÇÕES GERAIS</h1>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="btn">
                            <ion-icon name="person"></ion-icon>
                            <div>
                                <h1>Newsletter</h1>
                            </div>
                        </a>
                    </div>


                </div>



                <div class="meio">
                    @yield('meio')
                </div>

            </div>

        </div>
        <div class="outros mt-5">
            <div class="destaques-titulo">
                <h3>Destaques</h3>
            </div>
            <div class="destaques">
                <div class="destaque-item">
                    <div class="anuncio-img">
                        <img src="{{ url('assets/img/site/leilao/ativo1.png') }}" alt="">
                    </div>
                    <div class="anuncio-text">
                        <div class="titulo">
                            <h5>Newsletter</h5>
                        </div>
                        <div class="btn-span">
                            <span class="btn">As melhores Oportunidades. Subscreva já!</span>
                        </div>
                        <div class="texto">
                            <p>Subscreva a nossa Newsletter e esteja a par
                                das últimas novidades.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="destaque-item">
                    <div class="anuncio-img">
                        <img src="{{ url('assets/img/site/leilao/ativo2.png') }}" alt="">
                    </div>
                    <div class="anuncio-text">
                        <div class="titulo">
                            <h5>Imprensa Online</h5>
                        </div>
                        <div class="btn-span">
                            <span class="btn">Sugestões Diárias. 24h de companhia!</span>
                        </div>
                        <div class="texto">
                            <p>Os anúncios de sempre, à distância de 1
                                Clique ou 2! Estamos sempre por perto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="destaque-item">
                    <div class="anuncio-img">
                        <img src="{{ url('assets/img/site/leilao/ativo3.png') }}" alt="">
                    </div>
                    <div class="anuncio-text">
                        <div class="titulo">
                            <h5>Como Comprar</h5>
                        </div>
                        <div class="btn-span">
                            <span class="btn">Encontre as oportunidades disponiveis.</span>
                        </div>
                        <div class="texto">
                            <p>Se tem alguma dúvida sobre a compra de
                                um bem, consulte a informação disponivel
                                no nosso site.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="destaque-item">
                    <div class="anuncio-img">
                        <img src="{{ url('assets/img/site/leilao/ativo1.png') }}" alt="">
                    </div>
                    <div class="anuncio-text">
                        <div class="titulo">
                            <h5>Oportunidades do dia</h5>
                        </div>
                        <div class="btn-span">
                            <span class="btn">Não perca as oportunidades de hoje.</span>
                        </div>
                        <div class="texto">
                            <p>
                                Todos os dias novidades de investimento
                                para si. O tempo já está a contar!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="{{ url('assets/js/site/script.js') }}"></script>
        <script src="{{ url('assets/js/site/leilao/product-single.js') }}"></script>
    </body>

    </html>
@endsection
