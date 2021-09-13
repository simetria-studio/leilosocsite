@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="first">
            <div class="aside">
                <div class="titulo mb-5">
                    <p>Leilosoc | Tete - Viaturas Ligeiras</p>
                </div>
                <div class="refe-lote mb-3">
                    <span>REFERÊNCIA: 67139</span> <br>
                    <span>LOTE: 89</span>
                </div>
                <div class="fechamento mb-3">
                    <span>O primeiro lote fecha ás</span><br>
                    <span class="hora">15:33:00</span>
                </div>
                <div class="button-group">
                    <div class="mb-2 guardar button">
                        <a href="" class="btn btn-outline-primary">GUARDAR NO CALENDÁRIO</a>
                    </div>
                    <div class="mb-2 previo button">
                        <a href="" class="btn btn-primary">REGISTO PRÉVIO</a>
                    </div>
                    <div class="mb-2 detalhe button">
                        <a href="" class="btn btn-primary">DETALHES DO LEILÃO</a>
                    </div>
                    <div class="mb-2 visita button">
                        <a href="" class="btn btn-outline-primary">VISITAS</a>
                    </div>
                </div>

                <form action="">
                    @csrf
                    <div class="input-group pesquisa">
                        <input type="search" name="" id="" placeholder="  Pesquise pelo nº do lote">
                    </div>
                </form>

                <div class="filtros-leilao">
                    <div class="titulo">
                        <h5>FILTROS (123 LOTES)</h5>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Categorias
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Veículo x (2)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Veículo xxx (3)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne1" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Combinações de Venda
                                </button>
                            </h2>
                            <div id="flush-collapseOne1" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                        <label class="form-check-label" for="flexCheckDefault1">
                                            Combinação (1)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baixaqui">
                    <div>
                        <span><img src="{{ url('assets/img/site/leilao/ativo6.png') }}" alt=""> Catálogo</span> <br>
                        <a href="">download</a>
                    </div>
                    <div>
                        <span><img src="{{ url('assets/img/site/leilao/ativo7.png') }}" alt=""> Condições Gerais</span>
                        <br>
                        <a href="">download</a>
                    </div>
                </div>
            </div>

            <div class="meio">
                <div class="titulo">
                    <h3>Tete - Viaturas Ligeiras</h3>
                </div>
                <div class="eletronico">
                    <div>
                        <img src="{{ url('assets/img/site/leilao/ativo5.png') }}" alt="">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="titulo">
                        <p>Leilão termina em 22 de Agosto pelas 18h00</p>
                    </div>
                </div>

                <div class="pedro-campos">
                    <div>
                        <div>
                            <img src="" alt="">
                        </div>
                        <div class="lote-number">
                            <span>123 LOTES</span>
                        </div>
                    </div>
                    <div class="contatos">
                        <div>
                            <img src="{{ url('assets/img/site/leilao/ativo4.png') }}" alt="">
                        </div>
                        <div>
                            <p>
                                <span> Pedro Campos</span> | Comercial <br>
                                pedrocampos@leilosoc.pt <br>
                                Tel. +351 913 976 393
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-leilao">
                    <div class="lote">
                        <div class="lote-imagem">
                            <img src="{{ url('assets/img/site/leilao/ativo1.png') }}" alt="">
                        </div>
                        <div class="lote-info">
                            <div class="geral-info">
                                <h6>LOTE 1</h6>
                                <h6>NISSAN MURANO</h6>
                                <span>Viatura de marca Nissan, modelo Murano, matrícula AHI-875-MC, ano 2006, cerca de
                                    87.802KM</span>
                                <div class="valor">
                                    <p><span>VALOR BASE:</span> 350 000,00MT</p>
                                    <div class="ver-lote">
                                        <a href="/leilao/descricao" class="btn btn-primary">VER LOTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lote">
                        <div class="lote-imagem">
                            <img src="{{ url('assets/img/site/leilao/ativo2.png') }}" alt="">
                        </div>
                        <div class="lote-info">
                            <div class="geral-info">
                                <h6>LOTE 2</h6>
                                <h6>JEEP CHEROKEE</h6>
                                <span>
                                    Viatura de marca Jeep, modelo CHEROKEE, matrícula AHI-838-MC, ano 2002, cerca de
                                    94.949Km
                                </span>
                                <div class="valor">
                                    <p><span>VALOR BASE:</span> 350 000,00MT</p>
                                    <div class="ver-lote">
                                        <a href="" class="btn btn-primary">VER LOTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lote">
                        <div class="lote-imagem">
                            <img src="{{ url('assets/img/site/leilao/ativo3.png') }}" alt="">
                        </div>
                        <div class="lote-info">
                            <div class="geral-info">
                                <h6>LOTE 3</h6>
                                <h6>NISSAN NAVARRA</h6>
                                <span>Viatura de marca Nissan, modelo Navara 2.5, matrícula MMQ-51-60, ano 2008</span>
                                <div class="valor">
                                    <p><span>VALOR BASE:</span> 350 000,00MT</p>
                                    <div class="ver-lote">
                                        <a href="" class="btn btn-primary">VER LOTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
