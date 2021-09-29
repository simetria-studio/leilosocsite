@extends('layouts.site')
@section('content')
    <div class="new_container">
        <div class="titulo mt-5 mb-5 text-center">
            <h4><span style="font-weight: 900">Bens especiais </span> seleccionados pelos melhores especialistas!</h4>
        </div>
        <div class="pesquisa-leilao">
            <div class="content">
                <div>
                    <h6>Leilões (2680)</h6>
                </div>
                <div class="busca">
                    <input type="search" name="" id="" placeholder=" Pesquise em 5238 lotes">
                    <button class="btn">LUPA</button>
                </div>
            </div>
        </div>
        <div class="calendario-leiloes">
            <h6><span style="font-weight:600">CALENDÁRIO</span> DE LEILÕES</h6>
        </div>
        <div class="acessos">
            <div class="ano">
                <span class="input-number-decrement"><</span>
                <input class="input-number" type="text" value="2021" min="0" max="10">
                <span class="input-number-increment">></span>
            </div>
            <div>
                <p>Agosto</p>
            </div>
            <div class="mes">
                <span class="input-number-decrement"><</span>
                <input class="input-number" type="text" value="SETEMBRO">
                <span class="input-number-increment">></span>
            </div>
        </div>
        
        <div class="calendar mb-5">

            <ul class="weekdays">
                <li>SUN</li>
                <li>MON</li>
                <li>TUE</li>
                <li>WED</li>
                <li>THU</li>
                <li>FRI</li>
                <li>SAT</li>
                <li>SUN</li>
                <li>MON</li>
                <li>TUE</li>
                <li>WED</li>
                <li>THU</li>
                <li>FRI</li>
                <li>SAT</li>
                <li>SUN</li>
                <li>MON</li>
                <li>TUE</li>
                <li>WED</li>
                <li>THU</li>
                <li>FRI</li>
                <li>SAT</li>
                <li>SUN</li>
                <li>MON</li>
                <li>TUE</li>
                <li>WED</li>
                <li>THU</li>
                <li>FRI</li>
                <li>SAT</li>
                <li>SUN</li>
                <li>MON</li>
                <li>TUE</li>
            </ul>
            <ul class="days">
                <li class="position-relative">
                    <span>01</span>
                </li>
                {{-- <li>01</li> --}}
                <li class="position-relative">
                    <span class="active">02</span>
                    <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">02
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <li class="position-relative">
                    <span class="active">03</span>
                    <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">02
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <li class="position-relative">
                    <span class="active">04</span>
                    <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">02
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <li class="position-relative">
                    <span class="active">05</span>
                    <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">02
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <li class="position-relative">
                    <span class="active">06</span>
                    <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">02
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <li class="position-relative">07</li>
                <li class="position-relative">08</li>
                <li class="position-relative">09</li>
                <li class="position-relative"><span class="active">10</span></li>
                <li class="position-relative">11</li>
                <li class="position-relative">12</li>
                <li class="position-relative">13</li>
                <li class="position-relative">14</li>
                <li class="position-relative">15</li>
                <li class="position-relative">16</li>
                <li class="position-relative">17</li>
                <li class="position-relative">18</li>
                <li class="position-relative">19</li>
                <li class="position-relative">20</li>
                <li class="position-relative">21</li>
                <li class="position-relative">22</li>
                <li class="position-relative">23</li>
                <li class="position-relative">24</li>
                <li class="position-relative">25</li>
                <li class="position-relative">26</li>
                <li class="position-relative">27</li>
                <li class="position-relative">28</li>
                <li class="position-relative">29</li>
                <li class="position-relative">30</li>
                <li class="position-relative">31</li>
            </ul>
        </div>
        <div class="calendario-leiloes">
            <h6><span style="font-weight: 600">FILTRO</span> POR</h6>
        </div>
        <div class="filtro-por mb-5">
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>CATEGORIAS</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>PAIS</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>MODALIDADE DE VENDA</option>
                    <option value="1">LEILÃO ELETRÓNICO</option>
                    <option value="2">MATRIX</option>
                    <option value="3">LEILÃO PRESENCIAL</option>
                    <option value="4">BUY NOW</option>
                    <option value="5">LEILÃO PRIVADO</option>
                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>BOLSA DE IMÓVEIS</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="ver-leiloes mb-5">
            <div class="d-flex mb-5">
                <div>
                    <h6>Leilões (2680)</h6>
                </div>
                <div class="ver">
                    <li>
                        <a href=""> VER LEILÕES TERMINADOS</a>
                    </li>
                    <li>
                        <a href=""> VER DIAS DE VISITA</a>
                    </li>
                </div>
            </div>
            <div class="produtos mb-5">
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="icones">
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-save"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-share-alt"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="icon">
                            <span class="btn">
                                <i class="far fa-heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="descricao">
                        <div class="margin">
                            <div class="lote-licitacoes">
                                <p>1 LOTE • 2 LICITAÇÕES</p>
                            </div>
                            <div class="tempo">
                                <p>Termina em 0d 6h 53m 46s</p>
                            </div>
                            <div class="product-name">
                                <p>MASERATI LEVANTE V6</p>
                            </div>
                            <div class="serie">
                                <p>PT • BMPE-588</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="paginacao">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <div>
                <button class="btn btn-primary">LOG IN</button>
                <button class="btn btn-outline-primary">REGISTO</button>
            </div>
            <div>
                <p>Licite em + 5000 objectos todas as semanas, seleccionados por uma equipa experiente e profissional</p>
            </div>
        </div>

        <div class="destaque-semanal">
            <div class="titulo mt-5 mb-5 text-center">
                <h4><span style="font-weight: 900">Destaques </span> desta semana</h4>
            </div>
            <div class="destaques-produtos">
                <div class="produto">
                    <div class="imagem-produto">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="card-info">
                        <div class="container">
                            <div class="nome">
                                <div>
                                    <p>AUDI RS6</p>
                                </div>
                            </div>
                            <div class="info">
                                <div>
                                    <p>Base</p>
                                </div>
                                <div>
                                    <p>79 000€</p>
                                </div>
                                <div>
                                    <p>Inicio</p>
                                </div>
                                <div>
                                    <p>01.06.21 às 9h00</p>
                                </div>
                                <div>
                                    <p>Fim </p>
                                </div>
                                <div>
                                    <p>15.06.21 às 18h00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="produto">
                    <div class="imagem-produto">
                        <img src="{{ url('assets/img/site/Ativo 2.png') }}" alt="">
                    </div>
                    <div class="card-info">
                        <div class="container">
                            <div class="nome">
                                <div>
                                    <p>AUDI RS6</p>
                                </div>
                            </div>
                            <div class="info">
                                <div>
                                    <p>Base</p>
                                </div>
                                <div>
                                    <p>79 000€</p>
                                </div>
                                <div>
                                    <p>Inicio</p>
                                </div>
                                <div>
                                    <p>01.06.21 às 9h00</p>
                                </div>
                                <div>
                                    <p>Fim </p>
                                </div>
                                <div>
                                    <p>15.06.21 às 18h00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
