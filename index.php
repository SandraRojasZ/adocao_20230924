<?php include 'view/cabecalho.php'

?>


</head>

  <body>
    <?php
    session_start();
        include 'view/navbar.php';
        include 'view/home.php';
    ?>
    <main id="main">

      <?php 
          include 'view/sobreNos.php';
          include 'view/patrocinador.php';
      ?>   
    
            
    
        <?php
         include 'view/callAction.php';
         include 'view/depoimentos.php';
         include 'view/queroAdotar.php';
         include 'view/perguntas.php';
         include 'view/contato.php' ;
         ?>
        
    </main><!-- End #main -->
    
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <div id="preloader"></div>
    
    <?php 
      include 'view/rodape.php';
      include 'view/footer.php';
    ?>
        

    
  </body>
</html>