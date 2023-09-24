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
          <h2>Cadastre sua ONG </h2>
          <p>Se você representa uma ONG dedicada ao bem-estar dos animais, convidamos você a se cadastrar conosco. Ao fazer parte da nossa plataforma, você terá a oportunidade de divulgar os animais sob seus cuidados e ajudá-los a encontrar lares amorosos. <br>
            Juntos, podemos fazer a diferença nas vidas desses animais.
          </p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
       <img src="../assets/img/dois-gatos.png" class="img-fluid rounded-4" alt="">
     
            </div>

          </div>

          <div class="col-lg-8">
            <form action="../controler/processar-cadastro_ong.php" method="post" role="form" class="php-email-form">
                <div class="form-group mt-3">
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da ONG" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group mt-3">
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço da ONG" required>
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