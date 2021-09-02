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
        </div>
        <div class="anuncio">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="anuncio1">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="anuncio2">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>
        <div class="anuncio3">
            <img src="{{ url("assets/img/backoffice/banner-teste.png") }}" alt="">
        </div>

    </div>
@endsection
