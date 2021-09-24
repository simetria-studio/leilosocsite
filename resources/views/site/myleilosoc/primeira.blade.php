@extends('layouts.site')
@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb  mt-3">
                <li class="breadcrumb-item"><a href="#">Leilosoc</a></li>
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
                    <a href="" class="btn">
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
                <button>
                    <ion-icon name="person"></ion-icon>
                </button>
                <button class="active">
                    <ion-icon name="person"></ion-icon>
                </button>
                <button>
                    <ion-icon name="person"></ion-icon>
                </button>
                <button>
                    <ion-icon name="person"></ion-icon>
                </button>
            </div>
            <div class="meio">



                <div class="formulario_1">
                    <div class="row">
                        <div class="col-6 mb-3 ">
                            <label class="form-label" for="nome">Nome*</label>
                            <input class="form-control" type=" text" id="nome">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">País*</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Portugal</option>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="cc">CC*</label>
                            <input class="form-control" type="text" id="cc">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="nif">NIF*</label>
                            <input class="form-control" type="text" id="nif">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="email">Email*</label>
                            <input class="form-control" type="text" id="email">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="morada">Morada*</label>
                            <input class="form-control" type="text" id="morada">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="cep">Código Postal*</label>
                            <input class="form-control" type="text" id="cep">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="localidade">Localidade*</label>
                            <input class="form-control" type="text" id="localidade">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="tel">Telefone*</label>
                            <input class="form-control" type="text" id="tel">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="cel">Telemóvel*</label>
                            <input class="form-control" type="text" id="cel">
                        </div>


                        <div class="col-12 mb-3">
                            <label for="comprovante" class="form-label">Comprovativo Morada</label>
                            <input class="form-control" type="file" id="comprovante">
                        </div>


                        <div class="col-6 mb-3">
                            <label class="form-label" for="iban">IBAN</label>
                            <input class="form-control" type="text" id="iban">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="swift">SWIFT</label>
                            <input class="form-control" type="text" id="swift">
                        </div>
                        <div>
                            <button class="btn btn-primary">Guardar Alterações</button>
                        </div>
                    </div>
                </div>

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
@endsection
