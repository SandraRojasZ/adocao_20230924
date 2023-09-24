

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contato@adocao.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+55 11 2345 6789 </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Adocão<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#index.php">Adoção</a></li>
          <li><a href="#about">Sobre Nós</a></li>          
          <li><a href="#portfolio">Animais</a></li>      
          <li class="dropdown"><a href="#"><span>Quero Adotar</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="view/login-user.php">Login</a></li>
              <li><a href="view/cad-user.php">Cadastro</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Seja nosso parceiro</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="view/login-ong.php">Login</a></li>
              <li><a href="view/cad-ong.php">Cadastro</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contato</a></li>
      <li>   <?php
           if (isset($_SESSION['usuario'])) {
            echo '<a><form  action="repositorio/deslogar.php">';
          
            echo '<button class="btn btn-success btn-block " name="logout" type="submit"><strong>Sair<strong></button>';
          
            echo '</form></a>';
          }
          ?>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->