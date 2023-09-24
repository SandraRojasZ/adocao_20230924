
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
          <h2>Acesse sua conta</h2>
          <p>Na nossa organização, estamos comprometidos em encontrar lares amorosos para animais
             que precisam de uma segunda chance.
          </p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
       <img src="../assets/img/dois-gatos.png" class="img-fluid rounded-4" alt="">
     
            </div>

          </div>

          <div class="col-lg-8">
            <form action="../controler/processar_login_ong.php" method="post" role="form" class="php-email-form">
             <br><br><br>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
              </div>
             
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Entrar</button></div>
              <br><br>
              <div class="text-center"> <a href="cad-ong.php">Não possui cadastro?</a></div>
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