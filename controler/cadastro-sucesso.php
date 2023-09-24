<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adocão</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../css/responsividade.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"/>


</head>

<?php
    session_start();
        include 'navbar-controler.php';
?>
<div id="meuPopup" class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <div class="popup-conteudo">
        <span class="fechar" id="fecharPopup"></span>
        <h2><br></h2>
        <div class="text-center">
        <h2>Usuário Cadastrado com Sucesso!!</h2>
        <!-- Botão Voltar -->
        <form class="cads-log" action="../index.php">
          <blockquote class="blockquote bq-success">
          <button id="botaoVoltar" type="submit">Voltar</button>
          </blockquote>
        </form>
        <form class="cads-log" action="../view/login-user.php">
          <blockquote class="blockquote bq-success">
            <button id="botaoLogar">Login</button>
          </blockquote>
        </form>
</div>
        <h2><br></h2>
    </div>
</div>



<?php 
      include '../view/rodape.php';
      include '../view/footer.php';
?>
