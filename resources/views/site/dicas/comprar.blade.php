@extends('layouts.site')
@section('content')
    <div class="conteiner">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mt-5">
                <li class="breadcrumb-item"><a href="/">LEILOSOC</a></li>
                <li class="breadcrumb-item active" aria-current="page">COMPRAR</li>
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
        <div class="contate-nos">
            <img src="{{ url('assets/img/site/dicas/ativo26.png') }}" alt="">
            <div class="formulario">
                <div class="container_2">
                    <h1>Contate-nos</h1>
                    <form action="">
                        <div class="input-group mb-2">
                            <input class="form-control" type="email" name="" id="" placeholder="  Email">
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" type="text" placeholder="  Nome Empresa">
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" type="name" placeholder="  nome">
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" type="text" placeholder="  Tlf./Tlm">
                        </div>
                        <div class="input-group mb-3 categoria">
                            <select class="form-select">
                                <option selected>Categoria</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <textarea name="" id="" placeholder="  Mensagem"></textarea>
                        </div>
                        <div class="enviar col-auto">
                            <button type="submit" class="btn btn-primary mb-3">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="venda4 text-center">
                <h4>Compre em 4 passos</h4>
            </div>
        </div>
        <div class="container">
            <div class="dois_bloco">
                <div class="texto">
                    <div class="number">
                        <h1>1</h1>
                    </div>
                    <div class="titulo">
                        <h6> Criar uma conta gratuita</h6>
                        <p>
                            O registo no My LEILOSOC é grátis e apenas necessita de <br>
                            uma conta de email. Após receber o email de ativação,
                            confirme a criação de conta e está pronto a licitar.
                        </p>
                    </div>
                </div>
                <div class="imagem">
                    <img src="{{ url('assets/img/site/dicas/ativo27.png') }}" alt="">
                </div>
                <div class="imagem">
                    <img src="{{ url('assets/img/site/dicas/ativo28.png') }}" alt="">
                </div>
                <div class="texto">
                    <div class="number">
                        <h1>2</h1>
                    </div>
                    <div class="titulo">
                        <h6>Licitar nunca foi tão fácil</h6>
                        <p>
                            Escolha o lote em que está interessado e licite com um <br>
                            clique. Certifique-se de que lê as condições gerais antes <br>
                            de licitar e comprar.
                        </p>
                    </div>
                </div>

                <div class="texto">
                    <div class="number">
                        <h1>3</h1>
                    </div>
                    <div class="titulo">
                        <h6>Pagamentos seguros</h6>
                        <p>
                            Selecione a forma como gostaria de pagar e submeta <br>
                            o seu pagamento.
                        </p>
                    </div>
                </div>
                <div class="imagem">
                    <img src="{{ url('assets/img/site/dicas/ativo31.png') }}" alt="">
                </div>

                <div class="imagem">
                    <img src="{{ url('assets/img/site/dicas/ativo29.png') }}" alt="">
                </div>
                <div class="texto">
                    <div class="number">
                        <h1>4</h1>
                    </div>
                    <div class="titulo">
                        <h6>Levantamento de bens</h6>
                        <p>
                            Após boa cobrança, os bens podem ser levantados <br>
                            em 30 dias. Os imóveis são escriturados no prazo <br>
                            de 60 dias.
                        </p>
                    </div>
                </div>
            </div>
            <div class="informacoes">
                <div class="texto">
                    <div>
                        <h6>MY LEILOSOC®</h6>
                        <p>Acompanhe na sua área pessoal My LEILOSOC® <br>
                            todos os bens em que está interessado, adicio <br>
                            nando-os à sua lista de favoritos, e todos os <br>
                            lotes em que licitou.
                        </p>
                    </div>
                </div>
                <div class="texto">
                    <div>
                        <h6>INFORMAÇÃO COMPLETA</h6>
                        <p>Consulte as fotos e informações detalhadas <br>
                            de imóveis, veículos ou equipamentos <br>
                            no portal leiloes.pt.
                        </p>
                    </div>
                </div>
                <div class="texto">
                    <div>
                        <h6>VISITAS</h6>
                        <p>Na LEILOSOC® os bens são vendidos no estado <br>
                            físico e jurídico em que se encontram. <br>
                            Para maior segurança, visite os bens antes
                            de licitar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="as-vantagem mb-5">
            <div class="texto">
                <h4>As Vantagens de participar nos leilões Leilosoc®</h4>
            </div>
            <div class="bigsquare">
                <div class="square mt-5">
                    <div class="imagens">
                        <img src="{{ url('assets/img/site/dicas/ativo30.png') }}" alt="">
                        <h5>
                            EXPERIÊNCIA DE MAIS
                            DE 20 ANOS
                        </h5>
                        <p>
                            Um percurso com mais de 20 anos,
                            marcados por uma cultura
                            de empreendedorismo e de inovação.
                        </p>
                    </div>
                </div>
                <div class="square mt-5">
                    <div class="imagens">
                        <img src="{{ url('assets/img/site/dicas/ativo31.png') }}" alt="">
                        <h5>
                            24H/DIA, <br>
                            365 DIAS/ANO
                        </h5>
                        <p>
                            O portal de leilões da LEILOSOC® está <br>
                            disponível em Leiloes.pt <br>
                            24 horas por dia, 365 dias por ano.
                        </p>
                    </div>
                </div>
                <div class="square mt-5">
                    <div class="imagens">
                        <img src="{{ url('assets/img/site/dicas/ativo32.png') }}" alt="">
                        <h5>
                            COMPRE COMO QUISER, <br>
                            QUANDO QUISER
                        </h5>
                        <p>
                            7 formas de venda que se adaptam <br>
                            às suas necessidades.
                        </p>
                    </div>
                </div>
                <div class="square mt-5">
                    <div class="imagens">
                        <img src="{{ url('assets/img/site/dicas/ativo33.png') }}" alt="">
                        <h5>
                            ESPECIALISTAS
                        </h5>
                        <p>
                            A equipa LEILOSOC® é constituída por <br>
                            recursos humanos com experiência nos <br>
                            mais variados setores.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="calendario">
        <div class="aceda">
            <h3>
                NÃO PERCA AS OPORTUNIDADES DE HOJE, NO NOSSO CALENDÁRIO DE LEILÕES.
            </h3>
            <a class="btn btn-outline-primary" href="">ACEDA JÁ</a>
        </div>
    </div>
@endsection
