@extends('layouts.site')
@section('content')
    <div class="container">
        <form action="{{ route('site.registo.step') }}" method="POST">
            @csrf
            <div class="titulo mt-5 mb-4">
                <h5>REGISTO</h5>
            </div>
            <div class="erdar">
                <div class="mb-4">
                    <label for="endereco-email">Endereço de Email</label>
                    <input type="email" value="{{ $user->email }}" id="endereco-email">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                </div>

                <div class="mb-4">
                    <p>Campos marcados com * são obrigatórios.</p>
                </div>

                <div class="mb-4 dados-pessoais">
                    <h4>DADOS PESSOAIS</h4>
                </div>
            </div>
            <div class="row campos">
                <div class="col-6 mb-4">
                    <label for="nome">Nome *</label>
                    <input class="input-group" type="text" name="nome" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="apelido">Apelido *</label>
                    <input class="input-group" type="text" name="apelido" id="apelido">
                </div>
                <div class="col-4 mb-4">
                    <label for="pais">País *</label>
                    <select class="input-group" aria-label="Default select example" name="pais" id="pais">
                        <option selected>Selecionar País</option>
                        <option value="1">Portugal</option>
                        <option value="2">Moçambique</option>
                        <option value="3">Espanha</option>
                    </select>
                </div>
                <div class="col-4 mb-4">
                    <label for="codigo">Código País *</label>
                    <select class="input-group" aria-label="Default select example" name="codigo_pais" id="codigo">
                        <option selected>Selecionar Código</option>
                        <option value="1">(+351) Portugal</option>
                        <option value="2">(+258) Moçambique</option>
                        <option value="3">(+34) Espanha</option>
                    </select>
                </div>
                <div class="col-4 mb-4">
                    <label for="telemovel">Telemovel *</label>
                    <input class="input-group" type="text" name="telemovel" id="telemovel">
                </div>
                <div class="col-12 mb-4">
                    <label for="nome">Morada *</label>
                    <input class="input-group" type="text" name="morada" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">Código Postal *</label>
                    <input class="input-group" type="text" name="codigo_postal" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">Localidade *</label>
                    <input class="input-group" type="text" name="localidade" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="data">data de nascimento *</label>
                    <input class="input-group" type="date" name="data_nascimento" id="data">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">NÚMERO DE IDENTIFICAÇÃO FISCAL *</label>
                    <input class="input-group" type="text" name="nif" id="nome">
                </div>
            </div>

            <div class="mb-4">
                <span>Registar como empresa</span>
            </div>

            <div class="mb-4 subtitulos">
                <span>ACEITA RECEBER CAMPANHAS POR SMS?</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sms" value="sim" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sms" id="flexRadioDefault2" value="nao" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Não
                    </label>
                </div>
            </div>

            <div class="titulo mt-5 mb-4">
                <h5>NEWSLETTERS DISPONÍVEIS</h5>
            </div>
            <div>
                <div class="mb-4">
                    <div class="mb-3 subtitulos">
                        <span>NEWSLETTERS DISPONÍVEIS</span>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Novos leilões gerais
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Manter-me informado sobre os próximos leilões.
                        </label>
                    </div>


                    <div class="mb-3 subtitulos">
                        <span>CATEGORIAS PARA AS NEWSLETTERS</span>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="imoveis">
                        <label class="form-check-label" for="imoveis">
                            Imóveis
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="veiculos">
                        <label class="form-check-label" for="veiculos">
                            Veículos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="industria">
                        <label class="form-check-label" for="industria">
                            Indústria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mobiliario">
                        <label class="form-check-label" for="mobiliario">
                            Mobiliário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="arte">
                        <label class="form-check-label" for="arte">
                            Arte
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="tecnologia">
                        <label class="form-check-label" for="tecnologia">
                            Tecnologia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="outros">
                        <label class="form-check-label" for="outros">
                            Outros
                        </label>
                    </div>
                </div>
            </div>

            <div>
                <div class="termos-registo mb-4">
                    <p>A) REGISTO NO PORTAL DE LEILÕES LEILOSOC <br>
                        1. Os licitantes deverão proceder ao registo
                        no site da LEILOSOC Market Partners®, onde devem constar todos os elementos de identificação e
                        contacto
                        necessários, nomeadamente nome, morada, número de B.I. ou Cartão do Cidadão e número de
                        Contribuinte;<br>
                        2. Deve também indicar os dados de faturação; <br>
                        3. O licitante assume a veracidade dos dados introduzidos
                        e a
                        responsabilidade decorrente de tal ato; <br>
                        4. Depois de finalizar o registo, será solicitada a confirmação
                        da conta de email indicada no registo prévio. A confirmação é imprescindível para validar o email
                        solicitado e ser-lhe permitido licitar. <br>
                        B) SOBRE OS BENS EM LEIlÃO <br>
                        5. Os bens são vendidos nas condições, estado físico e jurídico em que se encontram, pelo que a
                        LEILOSOC
                        Market Partners® declina
                        qualquer responsabilidade relativamente ao seu estado de conservação ou funcionamento. <br>
                        6. Todos os leilões eletrónicos são compostos por um período de visitas aos bens – em horário
                        pré-definido
                        ou por marcação. Quando o período de visitas é pré-definido, o horário e morada física em que os
                        bens
                        podem
                        ser
                        visitados estão divulgados na área do leilão online e/ou na área do bem. Quando o tipo de visitas é
                        por
                        marcação, deverá contactar a LEILOSOC, de forma a agendar a visita. <br>
                        C) DURAÇÃO DO LEILÃO ELETRÓNICO <br>
                        7. O leilão decorrerá no período publicitado na área do leilão, sendo constituído por uma data e
                        hora de
                        início e uma data e hora de fim. <br>
                        8. Nos últimos 5 minutos de cada leilão, as novas licitações
                        reiniciam
                        a contagem decrescente em 5 minutos. Assim, por exemplo, se um leilão está agendado para terminar às
                        17:00, e acontece uma licitação às 16:58, o leilão prolonga-se, automáticamente, por mais 5 minutos,
                        terminando às 17:03 e assim sucessivamente. O leilão termina quando mais nenhuma licitação é
                        apresentada
                        dentro do tempo restante. <br>
                        9. Todos os bens em leilão estão identificados com um temporizador
                        decrescente
                        em horas, minutos e segundos. <br>
                        D) FUNCIONAMENTO DO LEILÃO ELETRÓNICO <br>
                        10. O licitante, ao licitar,
                        assume
                        a responsabilidade decorrente de tal ato, nomeadamente de adquirir o bem, pelo valor que ofereceu,
                        em
                        conformidade com o estabelecido na lei e nestas condições de venda. 11. Cada lote em leilão online,
                        apresenta três valores: <br>
                        11.1. Valor de venda: valor a partir do qual se considera o bem vendido,
                        sendo
                        adjudicado ao licitante com a maior licitação. <br>
                        11.2. Valor de saída: valor a partir do qual serão
                        aceites licitações com vista à arrematação do bem. Por vezes o valor de saída é inferior ao valor de
                        venda do bem. Caso o valor de venda não seja atingido, cabe à Leiloeira decidir sobre a sua
                        aceitação ou
                        não. <br>
                        11.3. Licitação atual: valor da licitação mais elevada, recebida até ao momento. <br>
                        12. Os lances
                        mínimos de licitação são de: <br>
                        a) ¤ 50,00 para lotes com “valor de saída” igual ou inferior a ¤
                        500,00; <br>
                        b) ¤ 100,00 para lotes com “valor de saída” de ¤ 501,00 a ¤ 5.000,00; <br>
                        c) ¤ 500,00 para lotes com “valor
                        de
                        saída” de ¤ 5.001,00 a ¤ 10.000,00; <br>
                        d) ¤ 1.000,00 para lotes com “valor de saída” de ¤ 10.001,00 a ¤
                        50.000,00; e) ¤ 2.000.00 para lotes com “valor de saída” de ¤ 50.001,00 a ¤ 100.000,00; <br>
                        f) ¤
                        5.000.00
                        para lotes com “valor de saída” de ¤ 100.001,00 a ¤ 250.000,00; <br>
                        g) ¤ 10.000,00 para lotes com “valor de saída” superior a ¤ 250.000,00. <br>
                        13. Os licitantes serão avisados, por email, caso surja uma
                        licitação
                        que supere a sua. A LEILOSOC Market Partners® não se responsabiliza por eventuais atrasos na entrega
                        do
                        email, dado que o serviço de entrega e receção do correio eletrónico não é de sua responsabilidade.
                        <br>
                        14.Todas as restantes licitações (que não venceram o leilão) são automáticamente arquivadas.
                        CONDIÇÕES
                        GERAIS DE VENDA ONLINE www.leilosoc.pt · geral@leilosoc.pt <br>
                        E) COMISSÕES PELOS SERVIÇOS PRESTADOS <br>
                        15. Ao valor da venda acresce uma comissão pelos serviços prestados pela LEILOSOC Market Partners® e
                        IVA
                        respetivo, nomeadamente: a) 5% no caso de BENS IMÓVEIS e IVA respetivo; b) 10% no caso de BENS
                        MÓVEIS e
                        IVA respetivo; <br>
                        c) Casos específicos serão indicados nas condições espe cíficas do leilão e/ou na
                        área de
                        informação dedicada ao leilão eletrónico e/ou ao produto em concreto. <br>
                        16. Em caso de adjudicação de um ou mais bens, o licitante será contactado após o términus do
                        leilão, de
                        forma a proceder ao
                        pagamento da
                        comissão, dos bens e respetivo levantamento. <br>
                        17. No caso em que o valor licitado, apesar de ser o mais
                        elevado, é inferior ao valor de venda do bem, o licitante será oportunamente contactado a fim de lhe
                        ser
                        comunicada a posição da leiloeira. <br>
                        F) PAGAMENTO DOS BENS <br>
                        18. Bens Imóveis: <br>
                        18.1. Com a arrematação e
                        assinatura do contrato promessa de compra e venda haverá lugar ao pagamento de 10% do valor proposto
                        a
                        título de sinal e princípio de pagamento; <br>
                        18.2. O valor remanescente será pago na data da escritura.
                        19.
                        Bens Móveis: <br>
                        19.1. Com a arrematação haverá lugar ao pagamento da totalidade do valor proposto e
                        respetivo IVA; <br>
                        20. O não pagamento do preço, não levantamento dos bens ou desistência, poderá ter as
                        seguintes implicações: a) A venda ser considerada sem efeito; b) Não poder concorrer a nova venda;
                        c)
                        Responder criminal e/ou civilmente pelos danos ou prejuízos causados; d) Não rever a caução. <br>
                        21. Se
                        por
                        motivos alheios à leiloeira, a venda for considerada sem efeito, por quem de direito, as quantias
                        eventualmente recebidas serão devolvidas em singelo. <br>
                        G) MODALIDADES DE PAGAMENTO <br>
                        22. Nos termos do
                        disposto no Regulamento n.º 314/2018 dos Deveres Gerais para a Prevenção e Combate ao Branqueamento
                        de
                        Capitais e do Financiamento do Terrorismo (BC/FT), referente à Lei n.º 83/2017, de 18 de agosto,
                        após a
                        adjudicação dos bens licitados, o pagamento poderá ser feito através das seguintes modalidades: <br>
                        22.1.
                        Multibanco; <br>
                        22.2. Transferência Bancária para o IBAN indicado no resumo das adjudicações; <br>
                        22.3.
                        Cheque
                        endossado à Isegoria Capital, S.A.; <br>
                        22.4. Numerário – proibido pagar ou receber em numerário em
                        transações de qualquer natureza que envolvam montantes iguais ou superiores a € 3000,00, ou o seu
                        equivalente em moeda estrangeira (Lei n.º 92/2017, de 22 de agosto). <br>
                        H) LEGITIMIDADE NO ACESSO AO <br>
                        SERVIÇO <br>
                        23. O leilão online não poderá ser utilizado por pessoas que não tenham capacidade jurídica
                        plena para a celebração de contratos onerosos, não podendo, nomeadamente, ser utilizado por menores
                        de
                        dezoito anos. <br>
                        24. A LEILOSOC Market Partners®, não assume qualquer responsabilidade resultante do
                        facto
                        de os participantes não possuírem capacidade jurídica plena para venderem ou comprarem os produtos.
                        <br>
                        25.
                        Os participantes no leilão deverão informar a LEILOSOC Market Partners® de qualquer situação que
                        limite
                        a sua capacidade jurídica, considerando-se que, se nada for comunicado nesse sentido, será assumido
                        que
                        têm capacidade jurídica plena. <br>
                        26. O participante do leilão obriga-se a manter confidencial a senha
                        de
                        acesso do leilão online e não poderá usar uma identificação de acesso de que não seja titular. O
                        participante do leilão assume toda a responsabilidade pelas operações efetuadas através da
                        utilização
                        desse dado, ainda que por terceiros, com ou sem a sua autorização, assumindo ainda a
                        responsabilidade
                        pela não divulgação da senha de acesso. <br>
                        27. A leiloeira poderá suspender o acesso ao portal sempre
                        que
                        este viole qualquer disposição legal ou qualquer disposição das presentes Condições Gerais de Venda
                        ou
                        dos seus anexos, bem como no caso de ser detetada qualquer atividade fraudulenta ou ligação a
                        atividade
                        fraudulenta promovida ou exercida pelo participante do leilão e relacionada com o leilão online.
                        <br>
                        28.
                        Na
                        eventualidade da conta de um participante do leilão ser suspensa ou cancelada, as obrigações
                        assumidas
                        por esse participante do leilão, nomeadamente a obrigação de pontual pagamento de quaisquer
                        montantes em
                        dívida e de conclusão de negócios a que se tenha proposto enquanto comprador, não se extinguem,
                        devendo
                        o participante do leilão cumprir tais obrigações. <br>
                        I) RESPONSABILIDADE DO PARTICIPANTE DO LEILÃO <br>
                        29.
                        Na
                        utilização do leilão online, o participante obriga-se a não adotar comportamentos que infrinjam a
                        ordem
                        jurídica vigente ou que lesem interesses ou posições juridicamente protegidas, obrigando-se ainda a
                        não
                        perturbar ou degradar a qualidade do serviço. <br>
                        30. O participante do leilão, compromete-se a observar
                        todos os procedimentos indicados pela leiloeira para a correta utilização do leilão eletrónico e a
                        pautar a sua atuação por elevados padrões de seriedade, prestando apenas informações verdadeiras e
                        atualizadas. CONDIÇÕES GERAIS DE VENDA ONLINE www.leilosoc.pt · geral@leilosoc.pt <br>
                        31.Não é permitida
                        a
                        participação num leilão com intuitos especulativos, com o objetivo de promover o aumento ou a
                        diminuição
                        do preço do produto leiloado, quer pelo lançamento de ofertas de compra ou de venda, quer pelo
                        incitamento ou provocação do lançamento dessas ofertas, não sendo igualmente permitido, de forma
                        alguma,
                        manipular o processo de realização dos leilões ou influenciar o comportamento dos demais
                        utilizadores do
                        leilão online, bem como praticar qualquer ato que implique uma sobrecarga injustificada, ou que
                        possa
                        danificar ou interferir com o sistema informático do leilão eletrónico. <br>
                        32. O participante do leilão
                        não
                        poderá utilizar qualquer programa informático, mecanismo ou processo manual de monitorização ou
                        reprodução, total ou parcial, do conteúdo constante das páginas eletrónicas do leilão online, sem a
                        autorização expressa, por escrito, da leiloeira. <br>
                        33. O participante do leilão assume a
                        responsabilidade
                        pela conclusão das licitações realizadas através do leilão online, nomeadamente o de adquirir o bem
                        pelo
                        valor que ofereceu, bem como pelo cumprimento da respetiva legislação aplicável. <br>
                        34. O participante
                        assume a responsabilidade e obrigatoriedade de levantamento do bem adquirido no local onde este se
                        encontra, no prazo máximo de 10 dias correntes após o término do leilão. <br>
                        J) RESPONSABILIDADE DA
                        LEILOSOC
                        Market Partners® <br>
                        35. A LEILOSOC Market Partners®, não é responsável por prejuízos que resultem de
                        falhas
                        ou deficiências do leilão online ou das operações de manutenção do mesmo, bem como por quaisquer
                        eventos
                        imprevisíveis e insuperáveis, alheios à sua vontade ou controlo, que a impeçam, total ou
                        parcialmente,
                        definitiva ou temporariamente, de cumprir as obrigações emergentes do Contrato e/ou que resultem do
                        incumprimento, mora ou cumprimento defeituoso que não sejam imputáveis, a título de dolo ou de culpa
                        grave, à Leiloeira ou aos seus representantes, agentes, auxiliares ou quaisquer outras pessoas que
                        esta
                        utilize para cumprimento das suas obrigações. <br>
                        36. Atendendo à dificuldade da confirmação da
                        identidade
                        dos utilizadores da Internet, a LEILOSOC Market Partners® não se responsabiliza pela correta
                        identificação dos utilizadores do leilão eletrónico. 37. A LEILOSOC Market Partners® reserva-se aos
                        seguintes direitos: <br>
                        a) Não adjudicar, no caso dos valores obtidos serem considerados insuficientes;
                        b)
                        Cancelar ou suspender as vendas, quando estas ocorram de forma irregular. <br>
                        K) DADOS PESSOAIS – RGPD <br>
                        38. A
                        LEILOSOC Market Partners® recolherá e procederá ao tratamento informático dos dados pessoais do
                        participante do leilão, inserindo-os numa base de dados apropriada e pela qual será responsável.
                        <br>
                        39.
                        Os
                        dados pessoais fornecidos pelo participante do leilão serão utilizados exclusivamente para fins
                        ligados
                        à execução do respetivo contrato, bem como, se o participante do leilão assim o autorizar, para
                        atividades de informação e marketing da leiloeira. <br>
                        40. O participante do leilão compromete-se a
                        fornecer
                        e a manter atualizados e verdadeiros os seus dados pessoais. Os dados pessoais respeitantes ao
                        quadro de
                        preenchimento obrigatório do formulário de adesão que se venham a apurar como sendo incorretos ou
                        incompletos, constituem motivo para a imediata suspensão ou cessação da prestação do leilão online,
                        bem
                        como para a resolução do respetivo contrato. <br>
                        L) NOTIFICAÇÕES 41. O participante do leilão concorda
                        em
                        receber as notificações relacionadas com o leilão eletrónico, incluindo eventuais alterações às
                        presentes Condições de Venda, para a caixa de correio eletrónico associada ao seu registo. <br>
                        M) LEI E
                        FORO
                        APLICÁVEL <br>
                        42. A venda é efetuada nos termos do disposto no art.º 834 do Código do Processo Civil.
                        43. A
                        LEILOSOC Market Partners® está devidamente acreditada pelo D.L: n.º 155/2015 de 10 de agosto,
                        portadora
                        do seguro de responsabilidade civil no valor de € 200.000,00 Apólice n.º RC63465018 Fidelidade –
                        Companhia de Seguros, S.A.. <br>
                        44. Nos termos do disposto no artigo 825.º n.º 1 c) do Código do
                        Processo
                        Civil, a falta de depósito do preço pode levar ao arresto em bens suficientes para garantir o valor
                        em
                        falta, acrescido das custas e despesas, sem prejuízo de PROCEDIMENTO CRIMINAL e sendo aquele,
                        simultaneamente, executado no próprio processo para pagamento daquele valor e acréscimos. <br>
                        45. A
                        todas as
                        questões não reguladas expressamente nas presentes Condições de Venda aplicar-se-á a Lei portuguesa.
                        A
                        LEILOSOC Market Partners®
                    </p>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="termos" required>
                    <label class="form-check-label" for="termos">
                        Aceitar os termos *
                    </label>
                </div>
            </div>
            <div class="btn-registo mb-4">
                <button type="submit" class="btn btn-outline-primary">REGISTO</button>
            </div>
        </form>
    </div>
@endsection
