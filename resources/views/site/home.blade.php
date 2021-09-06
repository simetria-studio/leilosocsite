@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="slider">
            <div class="imagebg">
                <img src="{{ url('assets/img/backoffice/banner-teste.png') }}" alt="">
            </div>
            <div class="imagebg">
                <img src="assets/img/site/teste1.jpg" alt="">
            </div>
            <div class="imagebg"></div>
        </div>
        <div class="licite">
            <p><span class="em">Licite em <span class="obj">+ 5000 objectos</span> todas as
                    semanas,</span>
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
        <div class="anuncios mt-5">
            <div class="destaque">
                <div class="fotografia">
                    <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                </div>
                <div class="descricao">
                    <div class="name">
                        <div class="nome">
                            <span>AUDI RS6 (2016)</span>
                        </div>
                    </div>
                    <div class="info">
                        <div class="pais">
                            <span><i>asd</i></span>
                            <span>3 lotes</span>
                        </div>
                        <div class="salvar">
                            <a href="">
                                <ion-icon name="save"></ion-icon>
                            </a>
                        </div>
                        <div class="compartilhar">
                            <a href="">
                                <ion-icon name="share-social"></ion-icon>
                            </a>
                        </div>
                        <div class="favorito">
                            <a href="">
                                <ion-icon name="heart"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="destaque-1">
                <div class="fotografia">
                    <img src="{{ url('assets/img/site/Ativo 2.png') }}" alt="">
                </div>
                <div class="descricao">
                    <div class="name">
                        <div class="nome">
                            <span>LOJA (PORTO)</span>
                        </div>
                    </div>
                    <div class="info">
                        <div class="pais">
                            <span><i>asd</i></span>
                            <span>3 lotes</span>
                        </div>
                        <div class="salvar">
                            <a href="">
                                <ion-icon name="save"></ion-icon>
                            </a>
                        </div>
                        <div class="compartilhar">
                            <a href="">
                                <ion-icon name="share-social"></ion-icon>
                            </a>
                        </div>
                        <div class="favorito">
                            <a href="">
                                <ion-icon name="heart"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="destaque-2">
                <div class="fotografia">
                    <img src="{{ url('assets/img/site/Ativo 3.png') }}" alt="">
                </div>
                <div class="descricao">
                    <div class="name">
                        <div class="nome">
                            <span>GONDOLA CUELLO</span>
                        </div>
                    </div>
                    <div class="info">
                        <div class="pais">
                            <span><i>asd</i></span>
                            <span>3 lotes</span>
                        </div>
                        <div class="salvar">
                            <a href="">
                                <ion-icon name="save"></ion-icon>
                            </a>
                        </div>
                        <div class="compartilhar">
                            <a href="">
                                <ion-icon name="share-social"></ion-icon>
                            </a>
                        </div>
                        <div class="favorito">
                            <a href="">
                                <ion-icon name="heart"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="destaque-3">
                <div class="fotografia">
                    <img src="{{ url('assets/img/site/Ativo 4.png') }}" alt="">
                </div>
                <div class="descricao">
                    <div class="name">
                        <div class="nome">
                            <span>TOYOTA HILUX (2008)</span>
                        </div>
                    </div>
                    <div class="info">
                        <div class="pais">
                            <span><i>asd</i></span>
                            <span>3 lotes</span>
                        </div>
                        <div class="salvar">
                            <a href="">
                                <ion-icon name="save"></ion-icon>
                            </a>
                        </div>
                        <div class="compartilhar">
                            <a href="">
                                <ion-icon name="share-social"></ion-icon>
                            </a>
                        </div>
                        <div class="favorito">
                            <a href="">
                                <ion-icon name="heart"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="destaque-4">
                <div class="fotografia">
                    <img src="{{ url('assets/img/site/Ativo 5.png') }}" alt="">
                </div>
                <div class="descricao">
                    <div class="name">
                        <div class="nome">
                            <span>TERRENO</span>
                        </div>
                    </div>
                    <div class="info">
                        <div class="pais">
                            <span><i>asd</i></span>
                            <span>3 lotes</span>
                        </div>
                        <div class="salvar">
                            <a href="">
                                <ion-icon name="save"></ion-icon>
                            </a>
                        </div>
                        <div class="compartilhar">
                            <a href="">
                                <ion-icon name="share-social"></ion-icon>
                            </a>
                        </div>
                        <div class="favorito">
                            <a href="">
                                <ion-icon name="heart"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class="encontre">
                <p><span class="enc">Encontre</span> nas nossas Categorias</p>
            </div>
            <div class="categorias">
                <div class="imoveis">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 6.png') }}" alt="">
                    </div>
                    <div class="nomecategoria">
                        <span>IMÓVEIS</span>
                    </div>
                </div>
                <div class="veiculos">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 7.png') }}" alt="">
                    </div>
                    <div class="nomecategoria">
                        <span>VEÍCULOS</span>
                    </div>
                </div>
                <div class="equipamentos">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 8.png') }}" alt="">
                    </div>
                    <div class="nomecategoria">
                        <span>EQUIPAMENTOS</span>
                    </div>
                </div>
                <div class="arte">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 9.png') }}" alt="">
                    </div>
                    <div class="nomecategoria">
                        <span>ARTE</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 mb-5">
            <div class="encontre">
                <p class="enc">A Melhor Rede de Negócios!</p>

                <p>Simples, Intuítivo e Completo. 24 Horas por dia ao seu lado.</p>
            </div>

        </div>
    </div>
@endsection
