<!-- Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 100vh; width: 100vw;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 100vh; width: 100vw;">
    <div class="carousel-item active mycarousel-item" style="background-image: url('<?=URL?>/public/img/home/home-first.jpg')">
    
        <div class="carousel-caption">
            <h1 style="text-shadow: 2px 2px 5px black;">Valentim Consultoria</h1>
            <h3 style="text-shadow: 2px 2px 5px black;">Consultoria e Serviços em Gestão Empresarial</h3>
            <a href="<?=URL?>/paginas/empresa" class="btn btn-primary btn-lg">Saiba Mais</a>
        </div>
    </div>
    <div class="carousel-item mycarousel-item" style="background-image: url('<?=URL?>/public/img/home/home-head2.jpg');">
        <div class="carousel-caption">         
            <h1 style="text-shadow: 2px 2px 5px black;">Serviços Prestados</h1>
            <h3 style="text-shadow: 2px 2px 5px black;">Nossos produtos e serviços foram formatados a partir das demandas do mercado em que atuamos</h3>
            <button class="btn btn-primary btn-lg">Saiba Mais</button>
        </div>
    </div>
    <div class="carousel-item mycarousel-item" style="background-image: url('<?=URL?>/public/img/home/home-head3.jpg');">
        <div class="carousel-caption">
            <h1 style="text-shadow: 2px 2px 5px black;">Cursos</h1>
            <h3 style="text-shadow: 2px 2px 5px black;">Cursos focados em entregar o melhor conteúdo para o aperfeioçamento de seus profissionais</h3>
            <button class="btn btn-primary btn-lg">Saiba Mais</button>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Fim do Carousel -->

<!-- Services-->

<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Serviços</h2>
            <h3 class="section-subheading text-muted">Descubra quais serviços podemos oferecer para sua empresa</h3>
        </div>
        <div class="row text-center my-card">
            <a class="col-md-4" href="<?=URL?>/paginas/cursos">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-book-reader fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Cursos</h4>
                <p class="text-muted">Oferecemos cursos voltados ao crescimento conjunto da sua empresa...</p>
                <button class="btn btn-primary">Saiba Mais</button>
            </a>
            <a class="col-md-4" href="<?=URL?>/paginas/servicos">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-user-tie fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Consultoria e Coaching</h4>
                <p class="text-muted">Atendemos as necessidades de interação da sua equipe e...</p>
                <button class="btn btn-primary">Saiba Mais</button>
            </a>
            <a class="col-md-4" href="<?=URL?>/paginas/servicos/#cursos">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-chalkboard-teacher fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Palestras</h4>
                <p class="text-muted">Conteúdos adaptados a realidade e necessidades da sua empresa...</p>
                <button class="btn btn-primary">Saiba Mais</button>
            </a>
        </div>
    </div>
</section>

<section class="container-fluid" id="portfolio" style="background-image: url('https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_960_720.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="container-fluid" style="background: rgba(20, 200, 230, 0.7);">
        <div class="text-center" style="margin: 20px 0px; padding: 20px 0px">
            <h2 class="section-heading text-uppercase text-white wild-text-shadow">Cursos</h2>
            <hr style="border: 1px solid #fff;">
            <h3 class="section-subheading text-white wild-text-shadow">Cursos e Treinamentos</h3>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" href="<?=URL?>/paginas/cursos">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><button class="btn btn-primary">Saiba Mais</button></div>
                        </div>
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/05/28/14/53/ux-788002_960_720.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Sob Medida</div>
                        <div class="portfolio-caption-subheading text-muted">Nossos Cursos e Treinamentos são feitos sob medida para sua empresa</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" href="<?=URL?>/paginas/cursos">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><button class="btn btn-primary">Saiba Mais</button></div>
                        </div>
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2019/02/10/09/21/lecture-3986809_960_720.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">In Company</div>
                        <div class="portfolio-caption-subheading text-muted">Cursos/Treinamentos realizados no local de sua escolha</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" href="<?=URL?>/paginas/cursos">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><button class="btn btn-primary">Saiba Mais</button></div>
                        </div>
                        <img class="img-fluid" src="<?=URL?>/public/img/home/certificado.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Certificado</div>
                        <div class="portfolio-caption-subheading text-muted">Certificado entregue nas capacitações e treinamentos</div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">A Empresa</h2>
            <h3 class="section-subheading text-muted">Nossa Missão</h3>
            <p style="text-align: justify;">Somos uma empresa que busca constantemente a excelência da qualidade, através da inovação e confiabilidade de nossos serviços e tem por objetivo atuar como estrutura complementar de Recursos Humanos, apoiando a gestão do capital humano como alavanca diferencial na geração de resultados satisfatórios para nossos clientes e colaboradores.
            Diariamente buscamos cumprir esta missão respondendo às necessidades e exigências que nos são colocadas, através da disponibilização de várias opções de produtos e serviços, permitindo a cada cliente uma solução à sua medida.</p>

            <div>
                <a href="<?=URL?>/paginas/empresa" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>

<!--
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2012</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2014</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
-->
    </div>
</section>

<!-- Clients
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
            </div>
        </div>
    </div>
</div>
Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contato</h2>
            <h3 class="section-subheading text-white">Nos envie um email, detalhe sua necessidade e lhe responderemos em breve.</h3>
        </div>
        <form action="<?=URL?>/public/assets/mail/contact_me.php" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Seu Nome *" required="required" data-validation-required-message="Por favor seu nome." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Seu Email *" required="required" data-validation-required-message="Por favor seu e-mail." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="Seu Telefone *" required="required" data-validation-required-message="Por favor seu Telefone." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" name="message" id="message" placeholder="Sua Mensagem *" required="required" data-validation-required-message="Por favor coloque sua mensagem."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <input class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </div>
</section>