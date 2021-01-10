<div class="jumbotron jumbotron-fluid my-0" style="background-image: url('../public/img/contato.jpg'); background-size: cover; min-height: 80vh; padding-top: 40vh">
  <div class="container text-white">
    <h1 class="wild-text-shadow">Contato</h1>
    <p class="lead wild-text-shadow">Contate-nos por um dos canais a baixo</p>
  </div>
  <p class="text-center"><a href="#quemsomos" class="js-scroll-trigger"><img style="width: 20vh;" src="<?=URL?>/public/img/arrowdown.gif" alt=""></p></a>
</div>

<p style="text-align: center; color: #fed136;"><a href="<?=URL?>">home</a> > Contato</p>

<section style="padding: 40px 0;">

    <div class="container">

        <div class="row">
            <div class="col-md-6 col-12">
                <div style="height: 100%; word-break: break-all">
                    <h2 class="text-center">Redes Sociais</h2>

                    <p style="font-size: 2em; text-align: center"><i class="fab fa-instagram"></i><a href="#"> @valentimconsultoriaoficial</a></p>
                    <p style="font-size: 2em; text-align: center"><i class="fab fa-facebook"></i> <a href=""> valentimconsultoria</a></p>
                    <p style="font-size: 2em; text-align: center"><i class="fab fa-linkedin"></i><a href="#"> Valentimconsultoria</a></p>
                    <p style="font-size: 2em; text-align: center"><i class="fab fa-youtube"></i><a href="#"> Valentimconsultoria</a></p>                    
                </div>

            </div>
            <div class="col-md-6 col-12">
                
                <form action="<?=URL?>/public/assets/mail/contact_me.php" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate" style="border: 1px solid #ddd;padding: 10px">
                <h2 class="text-center">E-mail</h2>
                    <div class="row align-items-stretch mb-5">
                        <div class="col-12">
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
                        <div class="col-12">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="message" id="message" placeholder="Sua Mensagem *" required="required" rows="10" data-validation-required-message="Por favor coloque sua mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <div id="html_element"></div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <input class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        
    </div>

</section>