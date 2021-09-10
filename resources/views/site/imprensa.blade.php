@extends('layouts.site')
@section('content')
    <div class="conteiner">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mt-5">
                <li class="breadcrumb-item"><a href="/">LEILOSOC</a></li>
                <li class="breadcrumb-item active" aria-current="page">IMPRENSA</li>
            </ol>
        </nav>
        <div class="primeiro mt-5">
            <div>
                <h1>PARTICIPAR NOS LEILÕES LEILOSOC® É SIMPLES</h1>
                <p>Bons Negócios 24h por dia!</p>
            </div>
            <div class="contate">
                <p>Contacte a nossa Equipa Comercial <br>
                    Leilosoc® Worldwide <br>
                    <a href="">geral@leilosoc.pt</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container_1">
        <div class="contate-nos mt-5">
            <img src="{{ url('assets/img/site/imprensa/ativo15.png') }}" alt="">
            <div class="formulario">
                <div class="container_2">
                    <h1 class="imprensa">Imprensa Leilosoc®</h1>
                    <p class="te">
                        Para acompanhar o ritmo de vida atual, <br>
                        a Leilosoc® tem-se adaptado de modo <br>
                        a estar mais perto dos nossos clientes
                    </p>
                    <p class="te mb-5">
                        Para isso para além dos nossos anúncios e <br>
                        notícias, disponibilizamos uma nova área, o <br>
                        blog Leilosoc®.
                    </p>
                    <div class=" mb-3 text-center">
                        <a class="btn btn-primary">ANÚNCIOS</a>
                    </div>
                    <div class="mb-3 text-center">
                        <a class="btn btn-primary">NOTÍCIAS</a>
                    </div>
                    <div class="mb-3 text-center">
                        <a class="btn btn-primary">BLOG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="anuncio-leilosoc">
        <div class="titulo text-center">
            <h4>Anúncios Leilosoc®</h4>
        </div>
        <div class="container">
            <!-- Example split danger button -->
            <div class="filtro-date">
                <div class="btn-group mb-5">
                    <button type="button" class="btn btn-danger">JULHO</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">JANEIRO</a></li>
                        <li><a class="dropdown-item" href="#">FEVEREIRO</a></li>
                        <li><a class="dropdown-item" href="#">MARÇO</a></li>
                        <li><a class="dropdown-item" href="#">ABRIL</a></li>
                        <li><a class="dropdown-item" href="#">MAIO</a></li>
                        <li><a class="dropdown-item" href="#">JUNHO</a></li>
                        <li><a class="dropdown-item" href="#">JULHO</a></li>
                        <li><a class="dropdown-item" href="#">AGOSTO</a></li>
                        <li><a class="dropdown-item" href="#">SETEMBRO</a></li>
                        <li><a class="dropdown-item" href="#">OUTUBRO</a></li>
                        <li><a class="dropdown-item" href="#">NOVEMBRO</a></li>
                        <li><a class="dropdown-item" href="#">DEZEMBRO</a></li>
                    </ul>
                </div>
                <div class="btn-group mb-5">
                    <button type="button" class="btn btn-danger">2021</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">2020</a></li>
                        <li><a class="dropdown-item" href="#">2019</a></li>
                        <li><a class="dropdown-item" href="#">2018</a></li>
                        <li><a class="dropdown-item" href="#">2017</a></li>
                        <li><a class="dropdown-item" href="#">2016</a></li>
                        <li><a class="dropdown-item" href="#">2015</a></li>
                        <li><a class="dropdown-item" href="#">2014</a></li>
                        <li><a class="dropdown-item" href="#">2013</a></li>
                        <li><a class="dropdown-item" href="#">2012</a></li>
                        <li><a class="dropdown-item" href="#">2011</a></li>
                        <li><a class="dropdown-item" href="#">2010</a></li>
                        <li><a class="dropdown-item" href="#">2009</a></li>
                    </ul>
                </div>
            </div>
            <div class="agenda">
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 1</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 2</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 3</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 4</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 5</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 6</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 7</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="pagina">
                    <img src="{{ url('assets/img/site/imprensa/ativo16.png') }}" alt="">
                    <div class="date">
                        <div class="data">
                            <span>03/07/2021</span>
                        </div>
                        <div class="page">
                            <span>Pag. 8</span>
                        </div>
                        <div class="ver">
                            |<a href=""> VER</a> |
                        </div>
                        <div class="download">
                            <a href=""> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="mb-5">
                <ul class="pagination pagination-sm">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="noticia-leilosoc">
        <div class="titulo text-center">
            <h4>Notícias Leilosoc®</h4>
        </div>
        <div class="container">
            <!-- Example split danger button -->
            <div class="filtro-date">
                <div class="btn-group mb-5">
                    <button type="button" class="btn btn-danger">2021</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">2020</a></li>
                        <li><a class="dropdown-item" href="#">2019</a></li>
                        <li><a class="dropdown-item" href="#">2018</a></li>
                        <li><a class="dropdown-item" href="#">2017</a></li>
                        <li><a class="dropdown-item" href="#">2016</a></li>
                        <li><a class="dropdown-item" href="#">2015</a></li>
                        <li><a class="dropdown-item" href="#">2014</a></li>
                        <li><a class="dropdown-item" href="#">2013</a></li>
                        <li><a class="dropdown-item" href="#">2012</a></li>
                        <li><a class="dropdown-item" href="#">2011</a></li>
                        <li><a class="dropdown-item" href="#">2010</a></li>
                        <li><a class="dropdown-item" href="#">2009</a></li>
                    </ul>
                </div>
            </div>
            <div class="noticias mb-5">
                <div class="imagem">
                    <img src="{{ url('assets/img/site/imprensa/ativo17.png') }}" alt="">
                </div>
                <div class="texto">
                    <div class="conteudo">
                        <h4>
                            28ª Grande Prémio de Ciclismo <br>
                            JN | LEILOSOC
                        </h4>
                        <p class="grande-premio">
                            O grande Prémio de Ciclismo JN é um evento desportivo de grande prestígio na história dos 130
                            anos de Jornal de Notícias, integrando o <br>
                            calendário da Federação Portuguesa de Ciclismo como a segunda maior prova de ciclismo em
                            Portugal. <br>
                            Pela primeira vez a prova teve um main sponsor que complementou o naming da iniciativa. <br>
                            Para a LEILOSOC Market Partners®, enquanto patrocinador principal, foi fácil reconhecer que
                            existe uma vontade coletiva, que vai muito além do <br>
                            apoio e organização de um evento desportivo de dimensão, em fazer do ciclismo uma modalidade
                            cada vez mais praticada e amada.
                        </p>
                        <p class="data">03 junho de 2018</p>
                        <img src="{{ url('assets/img/site/imprensa/ativo18.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="certificacao mb-5">
                <div class="iso">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/imprensa/ativo19.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h4>Certificação ISO 9001</h4>
                            <p>
                                A LEILOSOC Market Partners® é a primeira empresa do setor com <br>
                                sistema de gestão certificado (ISO 9001 - 2008) e a 1ª a transitar com <br>
                                sucesso para o (ISO 9001 - 2015). O Passado sustenta o Futuro... e o <br>
                                Futuro Orienta o Presente. <br>
                                Num percurso de excelência, o destino é a Qualidade. Para mais <br>
                                informações visite o site da SGS.
                            </p>
                            <p class="data">9 de setembro de 2018</p>
                        </div>
                    </div>
                </div>
                <div class="apdel">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/imprensa/ativo20.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h4>Criação da APdEL</h4>
                            <p>
                                A LEILOSOC Market Partners® é um dos membros-fundadores da <br>
                                primeira Associação de empresas do setor em Portugal. Para mais <br>
                                informações visite o site da Associação Portuguesa de Estabelecimentos de Leilão.
                            </p>
                            <p class="data">7 de abril de 2018</p>
                        </div>
                    </div>
                </div>
                <div class="npl">
                    <div class="imagem">
                        <img src="{{ url('assets/img/site/imprensa/ativo21.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h4>Forúm Ibérico NPL</h4>
                            <p>
                                O terceiro encontro sobre compra e venda de carteiras de créditos em Portugal. <br>
                                Embora tenham vindo a reduzir nos últimos anos, os empréstimos duvidosos em Portugal
                                continuam acima da <br>
                                média em grandes países. Este é um problema relevante para o sistema bancário europeu que
                                encontra <br>
                                alternativas no mercado secundário.
                            </p>
                            <p class="link"> <a target="_blank"
                                    href="http://connect.eventtia.com/es/dmz/2000/website">http://connect.eventtia.com/es/dmz/2000/website</a>
                            </p>
                            <p class="data">10 de agosto de 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="blog">
            <div class="titulo text-center mb-5">
                <h4>Blog Posts</h4>
            </div>
            <div class="curiosidades">
                <div>
                    <div class="imagem mb-4">
                        <img src="{{ url('assets/img/site/imprensa/ativo22.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h6>
                                Como a Kodak de George Eastman tornou <br>
                                a fotografia acessível a todos
                            </h6>
                            <p>
                                Hoje em dia, quase todas as pessoas têm uma máquina <br>
                                fotográfica, se não for uma avançada DSLR, será, pelo <br>
                                menos, uma integrada num telemóvel. <br>
                                Existem milhares de milhões de máquinas fotográficas <br>
                                no nosso planeta, proporcionando a milhões de pessoas <br>
                                a oportunidade de capturar qualquer momento de que <br>
                                gostem
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="imagem mb-4">
                        <img src="{{ url('assets/img/site/imprensa/ativo23.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h6>
                                Os 10 selos mais caros do mundo
                            </h6>
                            <p>
                                Emitido no Reino Unido em maio de 1840, o Penny Black foi <br>
                                o primeiro selo autocolante do mundo, motivo pelo qual <br>
                                este selo é tão valioso. Embora não seja o artigo de colecio-<br>nador mais raro ou mais
                                valioso,
                                estes selos foram determi-<br>nantes para o futuro dos selos postais britânicos.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="imagem mb-4">
                        <img src="{{ url('assets/img/site/imprensa/ativo24.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h6>
                                5 perguntas comuns sobre a compra de <br>
                                motos online
                            </h6>
                            <p>
                                Desde a inigualável Harley Davidson à clássica Vespa, estes <br>
                                veículos de duas rodas ocupam um lugar especial no <br>
                                coração dos colecionadores. Quais as tendências deste <br>
                                mercado e como fazer uma compra segura? Convidámo-lo <br>
                                a ler as 5 respostas que os nossos especialistas em motos <br>
                                dão a questões frequentes sobre a compra de motos. <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="imagem mb-4">
                        <img src="{{ url('assets/img/site/imprensa/ativo25.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <div>
                            <h6>
                                Como determinar o valor do seu gira-discos 
                                antigo
                            </h6>
                            <p>
                                Como acontece com todos os produtos tecnológicos, o <br>
                                estado é muito importante para determinar o valor de um <br>
                                gira-discos. Um gira-discos que já não funcione corretamen-<br>te, poderá continuar a ser interessante, enquanto objeto <br>
                                decorativo vintage, mas não será tão valioso. Um gira-discos <br>
                                em mau estado pode facilmente danificar os seus delicados <br>
                                discos de vinil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
