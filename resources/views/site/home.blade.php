@extends('layouts.site')
@section('content')
    <div class="slider">
        <div class="imagebg">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="imagebg">
            <img src="assets/img/site/teste1.jpg" alt="">
        </div>
        <div class="imagebg"></div>
    </div>
    <div class="licite">
        <p><span class="em">Licite em <span class="obj">+ 5000 objectos</span> todas as semanas,</span>
            selecionados por uma <span class="equipa">equipa experiente e profissional</span> </p>
    </div>
    <div class="qualidades">
        <div class="exp">
            <span>
                <img src="assets/img/site/checkbox.png" alt="">
                + 20 Anos de Experiência
            </span>
        </div>
        <div class="exp">
            <span>
                <img src="assets/img/site/checkbox.png" alt="">
                Transações seguras
            </span>
        </div>
        <div class="exp">
            <span>
                <img src="assets/img/site/checkbox.png" alt="">
                Líder em Portugal
            </span>
        </div>
    </div>
    <div class="anuncios">
        <div class="destaque">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
            <div class="descricao">
                <div class="nome">
                    <p>AUDI RS6 (2016)</p>
                </div>
                <div class="pais">
                    <p>bandeira</p>
                </div>
                <div class="lotes">
                    <p>3 lotes</p>
                </div>
                <div class="salvar">
                    <p>disket</p>
                </div>
                <div class="compartilhar">
                    <p>share</p>
                </div>
                <div class="favorito">
                    <p>heart</p>
                </div>
            </div>
        </div>
        <div class="destaque-1">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="destaque-2">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="destaque-3">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="destaque-4">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
    </div>
@endsection
