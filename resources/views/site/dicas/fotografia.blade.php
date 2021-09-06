@extends('layouts.site')
@section('content')
    <div class="camera">
        <img src="{{ url('assets/img/site/dicas/camera.png') }}" alt="">
    </div>
    <div class="container">
        <div class="condicoes mb-5 mt-3">
            <h1> <span>DICAS</span> de Fotografias</h1>
            <p class="compete">14 Dicas para melhorar as Imagens e obter maiores receitas</p>
            <h6 class="mb-4">As imagens são uma parte importante da descrição de um lote na Leilosoc®. Os utilizadores analisam as imagens
                em detalhe antes de sequer considerarem fazer uma licitação. Consequentemente, boas imagens
                conduzem a receitas mais elevadas e evitam a insatisfação dos compradores. Verifique a nossa lista de
                catorze dicas, concebida para o ajudar a criar o acompanhamento visual perfeito para os seus artigos.</h6>
            <ol class="ualpha mb-5">
                <li class="titulo-1"> Use iluminação adequada
                    <p>A luz natural ajuda a valorizar os detalhes dos artigos. A luz emitida por lâmpadas convencionais
                        oculta as cores reais dos artigos e as fotografias com flash podem provocar sombras e um aspeto
                        pouco atraente.</p>
                </li>
                <li class="titulo-1"> Mantenha a máquina fotográfica firme
                    <p>
                        Se mover a sua máquina fotográfica, as suas imagens perdem nitidez. Use um tripé ou outra forma de
                        imobilizar a sua máquina ao tirar fotografias.
                    </p>
                </li>
                <li class="titulo-1"> Mostre só os artigos que quer vender
                    <p>
                        Outros objetos podem distrair potenciais licitadores, diminuir a atratividade do artigo em questão e
                        até provocar confusões em relação ao que está incluído no lote. Quaisquer outros objetos que
                        apareçam na imagem
                        devem ser tão neutros quanto possível.
                    </p>
                </li>

                <li class="titulo-1"> Use um fundo neutro
                    <p>
                        Um fundo neutro e uniforme ajuda a destacar o seu lote. Pondere a possibilidade de usar um lençol,
                        um painel de cartão ou uma folha de papel.
                    </p>
                </li>
                <li class="titulo-1"> Tire fotografias de todos os lados
                    <p>
                        Os licitantes querem ver tantos detalhes quanto possível. Por isso, deve sempre incluir imagens da
                        frente, verso, topo e base do seu artigo. No caso de pinturas, use uma fotografia sem a moldura como
                        a sua imagem
                        principal!
                    </p>
                </li>
                <li class="titulo-1">Certifique-se de que os artigos estão apresentáveis e limpos
                    <p>
                        Para que o seu lote possa ser exibido no seu melhor, vale a pena limpá-lo devidamente antes de tirar
                        as fotografias.
                    </p>
                </li>
                <li class="titulo-1">Use pontos de referência neutros
                    <p>
                        Para artigos de dimensões atípicas ou irregulares, inclua uma referência de escala na fotografia,
                        como uma fita métrica, por exemplo. Certifique-se de que a referência não prejudica/desvia a atenção
                        do artigo em questão
                    </p>
                </li>
                <li class="titulo-1">Represente fielmente as condições do artigo
                    <p>
                        Sinais de desgaste e pequenos danos devem ser mencionados na descrição, para além de mostrados muito
                        claramente. Assim, os licitantes podem avaliar com toda a transparência as condições do artigo e a
                        possibilidade de restauro/reparação.
                    </p>
                </li>
                <li class="titulo-1">Escolha a máquina fotográfica certa
                    <p>
                        Uma máquina fotográfica digital é muito melhor do que a câmara de um smartphone para tirar
                        fotografias em grande plano.
                    </p>
                </li>
                <li class="titulo-1"> A sua melhor fotografia é o seu cartão de visita
                    <p>
                        A primeira imagem do seu conjunto de fotografias será usada como a imagem principal, visível a
                        partir da página do leilão. Esta é a imagem usada para chamar a atenção, por isso certifique-se de
                        que mostra o seu artigo
                        do melhor ponto de vista possível.
                    </p>
                </li>
                <li class="titulo-1">  Não deixe nada de fora
                    <p>
                        Se o seu lote inclui mais do que um artigo, não se esqueça de adicionar pelo menos uma imagem que mostre a globalidade do lote. E isso inclui manuais ou certificados!
                    </p>
                </li>
                <li class="titulo-1"> Evite os auto-retratos
                    <p>
                        Tenha cuidado ao tirar fotografias de artigos com superfícies refletoras ou com fundos refletores.
                    </p>
                </li>
                <li class="titulo-1"> Não faça ajustes de cor
                    <p>
                        O processamento digital das suas fotografias deve limitar-se à correção do ângulo e ao reenquadramento da imagem. Nunca ajuste as cores
                    </p>
                </li>
                <li class="titulo-1"> Represente detalhes relevantes
                    <p>
                        Os licitantes prestam muita atenção às marcas e carimbos, números de série, assinaturas/autógrafos, marcações, rótulos, etiquetas, etc. Inclua imagens desse tipo de características distintivas.
                    </p>
                </li>
            </ol>
            <div class="logar">
                <div class="btn-login">
                    <button class="btn btn-primary">LOG IN</button>
                </div>
                <div class="btn-registo">
                    <button class="btn btn-outline-primary">REGISTO</button>
                </div>
                <div class="licite">
                    <span>Licite em + 5000 objectos todas as semanas,<span class="magro">seleccionados por uma
                            equipa experiente e
                            profissional.</span> </span>
                </div>
            </div>
        </div>
    </div>
@endsection
