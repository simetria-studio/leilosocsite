@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Olá, Rute seja bem vinda!</h1>
        </div>
    </div>
    <div class="icones">
        <div class="itens">
            <a href="backoffice/banner">
                <img src="{{ url('assets/img/backoffice/banner.png') }} " alt="banner">
                <div class="card-body">
                    <p class="card-text">Cadastrar <br> Banners</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/leilao.png') }}" alt="...">
                <div class="card-body">
                    <p class="card-text">Ver leilões em Andamento</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/calendario.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Ver todos calendários</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/user.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cadastrar Usuários</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/noticias.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cadastrar <br> Notícias</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/conf.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Configurações do site</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/modulos.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Módulos <br> do Site</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/analytics.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Ver analycts do site</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="">
                <img src="{{ url('assets/img/backoffice/seo.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Configurações de SEO</p>
                </div>
            </a>
        </div>
        <div class="itens">
            <a href="/">
                <img src="{{ url('assets/img/backoffice/world.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Ver site <br> Online</p>
                </div>
            </a>
        </div>
    </div>
@endsection
