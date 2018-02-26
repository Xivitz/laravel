@extends('layouts.master')
@section('content')

    <body id="page-top">

    <!-- Header -->

    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Fórum DPU</div>
                <div class="intro-heading text-uppercase">DPU ITINERANTE</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Edição atual</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Dpu Itinerante</h2>
                    <h3 class="section-subheading text-muted">As ações itinerantes da DPU como forma de acesso à justiça.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Artigos</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/dpu-itinerante.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>As ações itinerantes da DPU</h5>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/capa.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>Editorial</h5>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/itinerantes-indigenas.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>Itinerantes indígenas</h5>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/itinerante-altamira.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>A experiência em Altamira</h5>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/grupo-interdefensorial-rio-doce.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>Acesso à justiça</h5>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/itinerante-rio-tapajos.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>Itinerante Rio Tapajós</h5>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Autores</h2>
                    <h3 class="section-subheading text-muted">Uma breve descrição dos autores desta edição.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/dr-fernando-mauro-barbosa-de-oliveira-junior.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Dr. Fernando Mauro Barbosa de Oliveira Junior</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Diretor da Escola Superior da Defensoria Pública da União, Defensor Público Federal da Categoria Especial</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/dr-francisco-de-assis-nascimento-nobrega.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Dr. Francisco de Assis Nascimento Nóbrega</h4>
                                    <!--<h4 class="subheading"></h4>-->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Secretário-Geral de Articulação Institucional,<br/> Defensor Público Federal da Categoria Especial</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/dr-joao-marcos-mattos-mariano.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!--<h4>December 2012</h4>-->
                                    <h4 class="subheading">Dr. João Marcos Mattos Mariano</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Defensor Público Federal, <br/>Comissão Estadual para Erradicação ao Trabalho Escravo do Espírito Santos - COETRAE/ES</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/dra-diana-freitas-de-andrade.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!--<h4>July 2014</h4>-->
                                    <h4 class="subheading">Drª. Diana Freitas de Andrade</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Defensora Pública Federal, <br/>Titular do 2º Ofício Geral da DPU em Campina Grande (PB)</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/dr-eduardo-marcelo-negreiros-freitas.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!--<h4>July 2014</h4>-->
                                    <h4 class="subheading">Dr. Eduardo Marcelo Negreiros Freitas</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Defensor Público Federal no Ceará</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; ESDPU 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3 class="text-uppercase">As ações itinerantes da DPU como forma de acesso à justiça</h3>
                                <p class="item-intro text-muted">Por <strong>Francisco de Assis Nascimento Nóbrega</strong> &#8212; Secretário-Geral de Articulação Institucional</p>
                                <img class="img-fluid d-block mx-auto" src="img/4.jpg" alt="">
                                <p>
                                    É notório que a Defensoria Pública da União tem envidado enormes esforços no sentido de interiorizar sua atuação, tendo esta agenda ganhado impulso com o advento da Emenda Constitucional 80/2014, que fixa prazo de 08 (oito) anos para que a União, os Estados e o Distrito Federal contem com Defensores Públicos em todas as unidades jurisdicionais.
                                    Enquanto a total interiorização não é alcançada, a Defensoria Pública da União se utiliza das chamadas “ações itinerantes” para atender a demanda dos assistidos residentes em cidades vinculadas a subseções judiciárias ainda não guarnecidas com unidade instalada do órgão. Atualmente, as missões itinerantes são implementadas por meio de dois projetos: o “Eu Tenho Direito” e o “Defensoria Para Todos”.
                                    O Projeto Eu Tenho Direito foi lançado em agosto de 2014, através do Processo SEI nº 08038.003525/2014-95, com objetivo de "propiciar o acesso à justiça por meio de medidas judiciais ou extrajudiciais visando garantir os direitos aos assistidos que residem em localidades onde não há unidades da Defensoria Pública da União", sendo que o planejamento é centralizado na Secretaria de Atuação Itinerante (SIT), vinculada à Secretaria-Geral de Articulação Institucional (SGAI). No início por meio do referido projeto, deslocou-se Defensores Públicos Federais e servidores para diversas cidades, de todas as regiões do país, com especial enfoque nos municípios mais carentes, com IDH (índice de desenvolvimento humano) mais baixo. Entretanto, com o desenrolar do projeto, constatou-se que o acompanhamento remoto, pela SIT/SGAI, das ações judiciais propostas, na prática, mostrou-se inviável, quer seja em razão da necessidade de realização de atos presenciais (audiências, por exemplo), quer seja pela necessidade de contato com o assistido para obtenção de novos documentos e/ou cumprimento de diligências judiciais, o que obstaculizou seu seguimento nos termos inicialmente pensados.
                                    Em verdade, notou-se que esse modelo hierarquizado de atuação itinerante, planejado e definido a partir de critérios eleitos pela Administração Superior, não atingia o fim ao qual se destinava, porquanto o acompanhamento das ações judiciais, feito de forma centralizada em Brasília, encontrou barreiras operacionais e orçamentárias deveras intransponíveis. O programa sobrevive hoje com foco em ações feitas em conjunto com outras instituições. A título de exemplo, cita-se a parceria com o Ministério do Trabalho, mediante a qual Defensores Públicos Federais são deslocados para integrarem as missões de resgate de trabalhadores em condições análogas à escravidão, em locais remotos do país. Os processos de assistência jurídica (PAJs) instaurados em decorrência destes resgates são acompanhados remotamente pelo Grupo de Trabalho de Erradicação ao Trabalho Escravo (GT Trabalho Escravo), vinculado à SGAI.
                                    De sua vez, o Projeto Defensoria para Todos foi lançado em março de 2016, por meio do Processo SEI n.º 08038.001817/2016-55 (TAP n. 1194193). Já atento às dificuldades do modelo desenhado no seio do Projeto “Eu Tenho Direito”, esta nova iniciativa funda-se na descentralização do planejamento e da execução de ações itinerantes voltadas ao público alvo da Defensoria Pública da União. Agora, estas atribuições passaram a ser afetas às próprias Unidades de atuação da Defensoria Pública da União já instaladas, com o objetivo de "propiciar o acesso à justiça, difusão de informações e conscientização de direitos a pessoas em situação de vulnerabilidade e que residem em localidade distante ou de difícil acesso às unidades da DPU". Atividades como divulgação, contato com as autoridades e a sociedade civil da cidade a ser atendida, preparação da infraestrutura para o atendimento, dentre outras, passaram a ser de responsabilidade da Unidade, por meio da Coordenação local do projeto. A atuação da SGAI, neste cenário, resume-se à verificação da adequação do TAP enviado aos termos, objetivos e diretrizes do Projeto, de forma a garantir uniformidade mínima na execução, bem como o controle dos recursos financeiros, dividindo-os de forma equânime entre todos os Defensores.
                                    Em seu primeiro ano de implementação efetiva, o Projeto “Defensoria Para Todos” teve adesão de praticamente metade das unidades instaladas da DPU e levou os serviços de assistência jurídica gratuita a mais de 80 (oitenta) cidades do interior do país, ocasionando a abertura de mais de 4.000 (quatro mil PAJs) e a realização de milhares de atendimentos. Alguns prefeitos, inclusive, enviaram expediente exaltando a atuação da Defensoria e solicitando o regresso da ação itinerante no ano de 2017.
                                    Conquanto passível de ajustes e aprimoramentos, o projeto “Defensoria Para Todos” vem se mostrado exitoso em seu mister de prover assistência jurídica gratuita aos assistidos que ainda não contam com a Defensoria Pública da União instalada em sua cidade, além de representar inegável ganho institucional, pois promove a divulgação e expansão do serviço defensorial, tornando a instituição mais próxima dos usuários.

                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>-->
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3 class="text-uppercase">Editorial</h3>
                                <p class="item-intro text-muted">Por <strong>Fernando Mauro Barbosa de Oliveira Junior</strong> &#8212; Diretor da Escola Superior da DPU</p>
                                <img class="img-fluid d-block mx-auto" src="img/capa.jpg" alt="">
                                <p>
                                    Prezados leitores, esta edição do Fórum DPU reservou esta tiragem para apresentar e tratar do tema das Ações Itinerantes da Defensoria Pública da União, porquanto são uma importante forma de assistência jurídica prestada aos mais vulneráveis, nos mais longínquos sítios deste país.
                                    O artigo da capa foi elaborado pelo Dr. Francisco Nóbrega, Secretário-Geral de Articulação Institucional – SGAI, cuja secretaria engloba a Secretaria de Atuação Itinerante – SIT, responsável pela ação itinerante da DPU. Desse modo, o Dr. Francisco esboça como funcionam os projetos que dão vida a esta relevante atividade da DPU.
                                    A presença da DPU, em atenção às pessoas afetadas com o rompimento da Barragem do Fundão, em Mariana/MG, foi objeto de análise pelo Dr. João Marcos (DRDH/ES) e pela Dra. Diana Andrade (DRDH/PB), meditando acerca da relevante função que compete à nossa Instituição, nos casos em que há uma exigência de atuação coletiva, rápida e eficaz, considerando as consequências suportadas pela população desta região.
                                    O itinerante do Rio Tapajós foi retratado pela Dra. Ingrid Soares. Vale reiterar o apontamento que se faz ao ressaltar que tão importante quanto o atendimento do itinerante em si é, também, a divulgação desta ação. Ademais, os itinerantes são, também, uma oportunidade de enriquecimento para os próprios Defensores, ao se aproximarem mais dos nossos assistidos e dos respectivos problemas, considerando que, por vezes, a quantidade de processos judiciais impede este ideal acercamento.
                                    A comunidade indígena é também priorizada nas atuações itinerantes da DPU, notadamente no esclarecimento de questões previdenciárias. Esta ação defensorial é destacada pelo Dr. Eduardo Freitas, em artigo que, brevemente, relata o atendimento realizado pela Unidade do Ceará, ressaltando a relevância do trabalho multidisciplinar, nesta oportunidade, com a participação de um sociólogo, que foi indispensável para o êxito da assistência.
                                    Foi reservada, do mesmo modo, uma seção do Fórum DPU, para trazer à tona e debater o atendimento às pessoas atingidas com a construção da hidrelétrica de Belo Monte. A Dra. Karina Rocha Mitleg Bayerl foi autora deste posicionamento. Mais uma vez, a DPU, utilizando-se do itinerante, vai ao encontro das pessoas alijadas de conhecimento jurídico para entenderem o que está acontecendo e se defenderem, neste caso, da empresa Norte Energia S.A. – NESA. A importância deste itinerante se percebe pelo fato de que foi instalada uma unidade da DPU em Altamira, a fim de que não ocorresse quebra de continuidade na assistência realizada.
                                    Por fim, como nos jornais anteriores, a última parte é dedicada a uma entrevista de pessoa não pertencente aos quadros da DPU. Aqui, Antonia Melo, representante do Movimento Xingu Vivo para Sempre (MXVPS), traz o seu ponto de vista sobre os problemas vivenciados pela comunidade de Altamira, com a instalação da hidrelétrica de Belo Monte, bem como sobre os serviços prestados pela DPU e a interação desta Instituição com a sociedade local.
                                    Boa leitura a todos!
                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>-->
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3 class="text-uppercase">A atuação da DPU em itinerantes indígenas</h3>
                                <p class="item-intro text-muted">Por <strong>Eduardo Marcelo de Negreiros Freitas</strong> &#8212; Defensor Público Federal no Ceará</p>
                                <img class="img-fluid d-block mx-auto" src="img/2.jpg" alt="">
                                <p>
                                    Por mais estranho que se possa parecer, os índios, primeiros habitantes do Brasil, titulares legítimos do território, ainda sofrem muito para ter garantidos seus direitos básicos, acarretando vários prejuízos na relação entre eles e com o Estado, pois o princípio da dignidade da pessoa humana, fundamento previsto constitucionalmente, vem sendo descumprido constantemente. Trata-se de uma violação que remonta à época do descobrimento, mas que ainda hoje vem prejudicando essa minoria.
                                    Para o Estatuto do Índio (Lei 6001/73), cuida-se do indivíduo de origem ou ascendência pré-colombiana, o qual se identifica e é identificado como pertencente a um grupo étnico cujas características o distingam da sociedade nacional. Percebe-se que o conceito legal também deve ser avaliado com alguns aspectos da antropologia e da sociologia.
                                    As principais demandas em itinerantes envolvendo os índios referem-se aos benefícios previdenciários e assistenciais. O índio será beneficiário da previdência social quando exercer alguma atividade remunerada ou trabalhar como agricultor, pescador, por exemplo, em regime de economia familiar. O Estatuto do Índio, inclusive, no seu artigo 55, possui previsão de que o RGPS será extensivo aos índios, atendidas as condições sociais, econômicas e culturais das comunidades beneficiadas. Ademais, o artigo 24 da Convenção 169 da OIT esclarece que os índios também devem ter direito à seguridade social.
                                    O problema é que muitos índios acham que possuem direito aos benefícios pelo simples fato de serem indígenas, o que não é verdade, já que devem preencher as características de acordo com a categoria que se filiarem. A situação mais comum é o enquadramento na categoria de segurado especial, pois a maioria trabalha em regime de economia familiar. Apesar de a Lei 8213/91 e o Decreto 3048/99 não detalharem a condição do indígena como segurado especial, a instrução normativa nº 77/2015/INSS/PRES regulamenta o assunto.
                                    Vale ressaltar que a FUNAI tem a atribuição de expedir certidões que atestem o exercício da atividade rural, as quais deveriam servir como prova plena, contudo isso não ocorre na prática, eis que o cruzamento de dados aponta, algumas vezes, irregularidades no preenchimento das certidões, principalmente o exercício de atividades laborativas em outras categorias de segurados. Por exemplo, o exercício de atividade como empregado em alguma indústria, por curtos períodos, devido a fenômenos naturais, como seca, descaracteriza a condição de segurado especial. Dessa forma, o INSS vem criando grandes obstáculos para a concessão dos benefícios aos índios, exigindo entrevistas, as quais, pela instrução, deveriam ser uma exceção.
                                    Diante da grande insatisfação dos indígenas em busca dos seus benefícios, a Defensoria Pública da União no Estado do Ceará instaurou o PAJ 2011/35-3086, após manifestação de uma liderança indígena Tapeba, com o propósito de apuração de irregularidades do INSS na avaliação de benefícios previdenciários em favor dos indígenas de quatorze etnias cearenses (Tapeba, Tremembé, Pitaguary, Jenipapo-Kanindé, Tapuya-Kariri, Potyguara, Tabajara, Kanindé, Gavião, Kalabaça, Tupinambá, Kariri, Tubiba-Tapuya, Anacé).
                                    Após longo trabalho do sociólogo da DPU/CE, o servidor Daniel de Oliveira Rodrigues Gomes, foi realizado estudo estatístico relativo aos anos de 2012 e 2013, tendo como metodologia o cruzamento de dados das Certidões de Exercício de Atividade Rural emitidas pela FUNAI – compartilhados em planilhas pela Coordenação Regional Nordeste II – com aqueles constantes no Cadastro Nacional de Informações Sociais (CNIS).
                                    Depois do conhecimento dos principais problemas e os locais em que a violação de direitos era mais grave, a DPU/CE passou a atuar de forma mais efetiva em demandas dentro do limite territorial de atuação, obtendo algumas vitórias expressivas, mesmo em processos protegidos pelo manto da coisa julgada.
                                    Para ampliar a prestação da assistência jurídica gratuita aos indígenas cearenses e de acordo com o estudo estatístico, foram realizados itinerantes nas cidades de Monsenhor Tabosa, Crateús, São Benedito, dentre outras, garantindo vários direitos a essa minoria tão massacrada, provando a essencialidade da DPU no acesso à justiça aos mais pobres.
                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>-->
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3 class="text-uppercase">A experiência em Altamira</h3>
                                <p class="item-intro text-muted">Por <strong>Karina Rocha Mitleg Bayerl</strong> &#8212; Defensora Pública Federal em Vitoria/ES</p>
                                <img class="img-fluid d-block mx-auto" src="img/belo-monte.jpg" alt="">
                                <p>
                                    A intervenção da Defensoria Pública da União se fez necessária no município de Altamira, no Pará, em razão do impasse existente entre a empresa Norte Energia S.A. – NESA e os moradores da região da bacia do Rio Xingu, onde foi construída a Hidrelétrica de Belo Monte, acerca da necessidade de desocupação das áreas atingidas e as competentes indenizações devidas. Como membro do Grupo de Trabalho Comunidades Indígenas tive a oportunidade de estar em Altamira em dois períodos distintos, coordenando os trabalhos para que as negociações pudessem fluir da melhor forma possível.
                                    As reuniões com a Norte Energia S.A. – NESA e com os representantes dos movimentos sociais eram constantes, pois a todo momento a Norte Energia S.A. – NESA mudava as regras para a negociação, ficando claro seu intuito de dificultar e postergar a concretização dos acordos, objetivando com isso a imposição de suas decisões.
                                    Presenciamos diversas manifestações do movimento Xingu Vivo na sede da Norte Energia S.A. – NESA, em razão de constantes mudanças no procedimento, bem como de outros movimentos sociais.
                                    Diante da brusca queda nas negociações, uma equipe de Defensores Públicos Federais se reuniu com os representantes da Norte Energia S.A. – NESA para esclarecer que seria inviável a participação da Defensoria Pública da União nas “rodadas de negociações”, que vinham se resumindo a mera conferência de documentos, não mais se justificando seu deslocamento para o exercício de tal atividade.
                                    Foram realizadas reuniões com as cooperativas dos barqueiros (APPEP) e pilotos de voadeiras (COOPIBAVOX) e a Norte Energia S.A. – NESA, a fim de que a mesma se comprometesse a fazer nova análise/levantamento de dados referentes à situação específica de cada cooperativa.
                                    Outro ponto que merece destaque foi a dificuldade de acesso aos processos administrativos da Norte Energia S.A. – NESA, vez que apenas disponibilizavam cópia para a parte durante a negociação e para a Defensoria Pública da União somente após negociação. Tratava-se de questão a ser revista, haja vista que a análise do procedimento administrativo poderia influenciar em muito o encaminhamento a ser observado.
                                    A meu sentir a Norte Energia S.A. – NESA dava caráter sigiloso aos processos administrativos e mesmo quando fornecia cópias, estas não eram completas, sendo subtraídas as justificativas de elegibilidade, que eram fundamentais para entender e, se fosse o caso, questionar o critério adotado.
                                    Acompanhados pelo vice prefeito visitamos algumas áreas afetadas (Jardim Independente I e Jardim Oriente) e tivemos oportunidade de conversar com moradores locais, que externaram diversas queixas a respeito da ausência de indenização/indenização justa e da constante pressão para ultimar a negociação.
                                    Também visitamos outras áreas afetadas, acompanhados por representantes do Movimento Xingu Vivo, como o Baixão do Tufi, Beco do Afonsin, Brasília e Invasão dos Padres, ocasião que conversamos com as famílias ali instaladas, todas insatisfeitas com a forma com que as negociações eram conduzidas pela Norte Energia S.A. – NESA.
                                    Nos dois períodos que estive em Altamira restou evidente o desconforto da Norte Energia S.A. – NESA diante da possibilidade de judicialização dos conflitos, mas também a sua resistência em relação às negociações, manifestada através da recalcitrante incompletude das respostas de ofícios, bem como na recusa e/ou demora na entrega de documentos relacionados aos processos administrativos, e das constantes alterações, unilaterais, dos critérios para as negociações.
                                    A despeito de toda dificuldade encontrada, foi possível realizar muitos acordos e dar algum alento às famílias que deles se beneficiaram.
                                    Caso emblemático foi o de Sr Otávio, que contou com a atuação de diversas equipes até que fosse ultimada a mudança de sua família para o RUC Água Azul. Ele e sua família (12 pessoas) aguardavam a mudança numa casa alugada na “Invasão dos Padres”. O local não possuía qualquer infraestrutura e também seria alagado após conclusão das obras.
                                    Se de um lado era bom ver que o acordo facilitado pela atuação da Defensoria Pública da União junto à Norte Energia S.A. – NESA estava sendo cumprido, diversos questionamentos vinham à mente: Como viveria Sr. Otávio, um pescador, “no meio da cidade”, longe de seu ambiente? Sua família se adaptaria à nova vida? Conseguiriam se estabelecer? São indagações que apenas o tempo responderá...
                                    A sensação que guardei foi que a cada equipe que chegava novas dificuldades eram criadas, de regra sob o argumento de que o procedimento havia sido ajustado com a equipe anterior, talvez imaginando, equivocadamente, diga-se, que não havia diálogo entre os coordenadores que se revezaram. E a cada coordenação cabia superar os entraves iniciais e readequar o procedimento, buscando sempre equacionar os problemas para que as negociações não fossem encerradas sumariamente pela Norte Energia S.A. – NESA.
                                    Se de um lado retornei com diversas frustrações pelos acordos não realizados, pelos obstáculos que não conseguimos superar, de outro me acompanhava a certeza de que a atuação em Altamira não poderia cessar, que nossa presença era essencial.
                                    Acertadamente a Administração Superior decidiu instalar uma unidade em Altamira, mantendo, até a lotação definitiva dos Defensores Públicos Federais, as equipes de atuação, ainda que reduzidas, visando evitar solução de continuidade no atendimento à população impactada pela construção da Usina Hidrelétrica de Belo Monte.
                                    Restam agora as memórias dos diálogos com os movimentos sociais e com os assistidos, das visitas às áreas impactadas, porém, não fugirá jamais de minha memória a imagem das obras e do passeio de voadeira pelo Rio Xingu. Se de um lado impressiona a capacidade que o ser humano tem para desenvolver projetos grandiosos, de outro, choca ver a extensão da destruição que estas mesmas obras podem causar. Florestas devastadas, vegetação suprimida, ilhas que deixaram de existir, cursos d’água alterados, enfim, uma série de problemas ambientais.
                                    Fica o desejo de que o Núcleo de Altamira possa se estruturar para dar a adequada assistência a essa população assolada por tamanha destruição, ou “impacto”, como preferem os técnicos.
                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>-->
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3 class="text-uppercase">Desenvolvimento e acesso à justiça: a atuação do Grupo Interdefensorial do Rio Doce</h3>
                                <p class="item-intro text-muted">Por <strong>João Marcos Mattos Mariano</strong> &#8212; DRDH no Espírito Santo e <strong>Diana Freitas de Andrade</strong> &#8212; DRDH na Paraíba</p>
                                <img class="img-fluid d-block mx-auto" src="img/grupo-interdefensorial-rio-doce.jpg" alt="">
                                <p>
                                    Embora muitas vezes seja considerado sinônimo de crescimento econômico, o desenvolvimento é um processo que deve ser capaz de humanizar a vida das pessoas por meio da incorporação de padrões institucionais, culturais e econômicos. A propósito, Celso Furtado defende que somente quando “a acumulação conduz à criação de valores que se difundem em segmentos importantes da coletividade, o desenvolvimento se realiza.” (FURTADO, 2011, p. 172). Na mesma perspectiva, Amartya Sen afirma que o desenvolvimento é integrado por elementos como liberdade, democracia, participação popular, qualidade de vida, distribuição dos recursos e promoção de políticas públicas (SEN, 2000).
                                    A defesa e garantia de direitos fundamentais, portanto, é essencial ao desenvolvimento de qualquer comunidade, especialmente daquelas que sofrem os impactos de grandes obras, cuja construção costuma ser celebrada em razão da imediata associação ao desenvolvimento regional. Foi com base nessa concepção que, em 14 de setembro de 2016, as Defensorias Públicas da União, do Estado de Minas Gerais e do Estado do Espírito Santo firmaram um termo de cooperação técnica para criação do Grupo de Trabalho Interdefensorial do Rio Doce (GIRD).
                                    O GIRD tem o objetivo de prestar assistência jurídica às vítimas do rompimento da Barragem do Fundão, em Mariana/MG. Já no mês de sua criação, o grupo promoveu audiências públicas em diversos municípios do interior do Espírito Santo e de Minas Gerais. As audiências contaram com ampla participação popular e permitiram o diálogo direto entre as comunidades impactadas, a sociedade civil organizada, a empresa Samarco (Fundação Renova) e os defensores públicos federais e estaduais. Foi também nesses eventos que as Defensorias Públicas obtiveram mais subsídios para guiar sua atuação em defesa do justo ressarcimento pelos danos materiais e morais que o rompimento da barragem causou às pessoas em situação de vulnerabilidade.
                                    Assim, era preciso reconhecer e ouvir a multidão invisível que, apesar de nunca ter se apropriado dos frutos do “desenvolvimento”, foi obrigada a conhecer a face mais gravosa de um modelo exploratório mineral que, de tão frouxo e iníquo, poderia – não fosse a complexidade dos entrangeirismos hoje utilizados pelos técnicos desse meio – ser confundido com aquilo que se lê nos livros de história colonial.
                                    Sem o apoio dessas populações, que se organizaram em comissões, fóruns e grupos de trabalho, as Defensorias não poderiam realizar o hercúleo trabalho de detectar danos dos mais diversos matizes e cuja extensão ainda não resta completamente esclarecida.
                                    Por outro lado, o contato rememorou a importância da Defensoria Pública, enquanto instituição autônoma e técnica, capaz de catalisar demandas de indivíduos hipervulnerabilizados diante do interesse de grupos econômicos multinacionais: ficou claro que não fosse a atuação unívoca e concertada do Grupo de Defensores mesmo os direitos mais básicos seriam ceifados. Um exemplo elucida a gravidade do problema: nenhum trabalho jurídico de valor negaria que ao devedor somente é possível considerar-se quite naquilo que pagou (ora, é o que está escrito no art. 319 do Código Civil; “o devedor que paga tem direito a quitação regular...”), no entanto, no Vale do Rio Doce foi necessária uma ação civil pública para afastar o intento dos responsáveis pelo dano socioambiental de se eximirem indevidamente do que devem sem a contrapartida necessária.
                                    Igualmente, diversas comunidades ribeirinhas e estuarinas que dependiam diretamente do rio destruído ficaram por mais de um ano, por omissão do conglomerado minerador, sem sequer terem a sua condição de impactadas reconhecida. Somente muito recentemente esse quadro começou – após meses de trabalho contínuo da Defensoria Pública da União e das Defensorias dos Estados de Espírito Santo e Minas Gerais, sem contar diversas manifestações populares. E, repita-se, não se tratava, ainda, de discussões acerca de qual valor que seria pago às populações devastadas. Era tão somente a busca pelo direito de ver oficialmente declarada a existência de um sofrimento e de um desespero diariamente vivenciados por quem teve toda sua razão de existir subitamente ceifada.
                                    O sentimento, por vezes, é desolador. Parece que a maior batalha é contra o tempo; este promove o esquecimento e não se encaixa bem nas burocracias inexpugnáveis dos trâmites impostos pelas entidades privadas diretamente incumbidas da resolução do problema por elas mesmas criado. Ele se esvai, esmorece ânimos e, no atual cenário de crise, fortalece o discurso dos que têm fome – seja de pão, seja das riquezas das veias abertas das minas gerais. Afinal, tudo aceita aquele que não tem mais nada – até a mão amiga do desconhecido de verde passa a ser confundida com a faca de quem promove a miséria. Mas, felizmente, na agonizante bacia hidrográfica não se encontra apenas desolação: há também esperança. Essa é a força que, parcimoniosa, se satisfaz com a menor vitória e tem animado os defensores que nesse último ano fizeram do Vale do Rio Doce sua segunda morada.
                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>-->
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3 class="text-uppercase">Itinerante Rio Tapajós</h3>
                                <p class="item-intro text-muted">Por <strong>Ingrid Soares Léda Noronha</strong> &#8212; Defensora Pública Federal em Santarém/PA</p>
                                <img class="img-fluid d-block mx-auto" src="img/rio-doce.jpg" alt="">
                                <p>
                                    A atuação itinerante realizada pela Defensoria Pública da União, por intermédio da STI – Secretaria de Atuação Itinerante – promove as funções institucionais da Defensoria Pública, quais sejam, “prestar orientação jurídica e exercer a defesa dos necessitados, em todos os graus” e “promover a difusão e a conscientização dos direitos humanos, da cidadania e do ordenamento jurídico”, conforme Lei Complementar nº 80/1994 .
                                    Em outubro de 2016, realizou-se a primeira etapa da ação itinerante no Rio Tapajós. Nesse primeiro momento, pretendia-se o conhecimento das comunidades potencialmente beneficiadas e a divulgação do trabalho da Defensoria Pública da União. Os dois Defensores Públicos Federais – Dr. Alessandro Tertuliano e Dra. Ingrid Soares – acompanhados de um morador da Comunidade de Alter do Chão/PA se deslocaram por meio de uma “voadeira”, meio de locomoção usual na região, por inúmeras comunidades de permeiam a margem do Rio Tapajós. Foram visitadas comunidades como Jamaragua, Maguary e Piquiatuba, dentre outras, bem como Bragança com a comunidade indígena Munduruku.
                                    Durante as visitas realizadas nas comunidades ribeirinhas, além de divulgar o trabalho da DPU e os atendimentos que seriam realizados em novembro de 2016 em Alter do Chão, foi incrível a oportunidade de observar de perto a realidade das comunidades. Observar o dia a dia dos ribeirinhos, conversar com os líderes das comunidades e demais moradores, almoçar o peixe pescado há poucas horas, presenciar as dificuldades de deslocamento e a precariedade da estrutura de energia, saúde, educação, entre outros direitos básicos.
                                    A divulgação da ação itinerante demanda tanta importância quanto a própria atuação, uma vez que é nesse momento que são identificadas as principais demandas a serem atendidas e os assistidos, muitas vezes, tem o primeiro contato com a experiência da Defensoria Pública da União que atua prestando assistência jurídica gratuita.
                                    Nesse momento, nota-se a importância da presença da instituição naquelas comunidades, não só para demonstrar a existência e atuação da DPU mas sim, e principalmente, para assisti-los de atenção governamental (sentido lato) em comunidades onde muitas vezes “a lei não chega”, os serviços inexistem e há um sentimento de abandono. As comunidades ribeirinhas, então, procuram por um olhar mais atento.
                                    Sob o aspecto psicológico, incutisse a ideia da existência do Estado e da DPU como organismos que amparam a melhoria de suas vidas, além de conferir segurança em afirmar seus direitos e buscar sua efetivação.
                                    Sob o aspecto prático, a presença da Defensoria torna-se um braço prático como instituição concretizadora de direitos que muitas vezes não são concedidos em razão da gestão burocrática dos órgãos, visão unilateral dos problemas ou total desconhecimento da realidade.
                                    Após a grata experiência nas visitas das comunidades, em novembro de 2016, ocorreu a ação itinerante em Alter do Chão, que é um distrito de Santarém/PA, onde a Defensora Pública Federal subscritora desempenha suas atividades. A ação itinerante Rio Tapajós desenvolveu-se no Conselho Tutelar, contando com a colaboração valiosa das Assistentes Sociais do Município de Santarém. A cooperação da Prefeitura foi imprescindível para o sucesso do projeto, uma vez que também auxiliaram na divulgação, sugestão do local de atendimento e acolhimento dos assistidos.
                                    A atuação da DPU na ação itinerante objetiva divulgar o serviço público prestado pela instituição, promover orientação jurídica aos cidadãos, encaminhá-los aos órgãos competentes para atendimento e atuação de extrajudicial e judicial por meio de propositura de petições iniciais no caso de haver documentos suficientes. A ação itinerante Rio Tapajós contou com a participação de cinco Defensores Públicos Federais, quatro servidores da DPU e um médico.
                                    Nesse campo, a atuação itinerante aproxima os Defensores e servidores do público alvo da Defensoria Pública, ou seja, população vulnerável que, por vezes, sequer tem consciência do seu direito e da existência de um órgão que presta assistência jurídica gratuita. Assim, é relevante não apenas para a população da região – no caso, população ribeirinha, mas também para humanização das pessoas que atuam na Defensoria Pública.
                                    Por fim, em uma visão pessoal desta Defensora, também há um reflexo significativo em seu desempenho, pensamento e postura institucional. Um choque de realidade – muitas vezes sabida apenas por “ouvir falar” - causa uma mudança de pensamento, um ardor de atuação e atenção ainda maior aos assistidos, vez que foram vistas as dificuldades, as impossibilidades e verificada a certeza que a DPU é o último soldado de defensa das injustiças, amarguras e esperança dessa população.
                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>-->
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

   {{--  @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title"><a href="{{ route('blog.post', ['id' => $post->id]) }}">{{ $post->title }}</a></h1>
            <p style="font-weight: bold">
                @foreach($post->tags as $tag)
                    - {{ $tag->name }} - </br>
                @endforeach
            </p>
            <!-- <p>{{ $post->content }}</p> -->
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $posts->links() }}
        </div>
    </div> --}}
@endsection
