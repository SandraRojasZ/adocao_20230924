<?php
  session_start();
include 'navbar-cads.php';
?>


  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->
  <!-- End Header -->

<!-- Cadastro -->
<section id="contact" class="contact">
<div class="container" >
<div class="section-header">
          <h2>Cadastro</h2>
          <p>Junte-se à nossa comunidade e faça a diferença na vida dos animais. Ao se cadastrar no Adocão, você terá a oportunidade de descobrir animais adoráveis em busca de lares amorosos. <br> Registre-se agora para encontrar o seu companheiro peludo e dar a ele um lar cheio de amor e carinho.
          </p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
       <img src="../assets/img/dois-gatos.png" class="img-fluid rounded-4" alt="">
     
            </div>

          </div>

          <div class="col-lg-8">
            <form action="../controler/processar-cadastro.php" method="post" role="form" class="php-email-form">
                <div class="form-group mt-3">
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
              </div>
              <div class="form-group mt-3">
              <input type="password" id="confirmarsenha" name="confirmarsenha"  placeholder="Digite a senha novamente" class="form-control" required/>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Cadastrar</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>
    </div>      
</div>      
</section>
  <!-- ======= Footer ======= -->

  <!-- End Footer -->


</body>

<?php
  include 'rodape.php';
  include 'footer.php';
  ?>

</html>