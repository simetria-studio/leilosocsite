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
                        <div>
                            <p>1 LOTE • 2 LICITAÇÕES</p>
                        </div>
                        <div>
                            <p>Termina em 0d 6h 53m 46s</p>
                        </div>
                        <div>
                            <h5>MASERATI LEVANTE V6</h5>
                        </div>
                        <div>
                            <p>PT • BMPE-588</p>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="descricao">

                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="descricao">

                    </div>
                </div>
                <div class="item">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/Ativo 1.png') }}" alt="">
                    </div>
                    <div class="descricao">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
