<!doctype html>
<html>   
 <head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> InfoQuest - Aprenda jogando </title>
  <link rel="icon" type="imagem/png" href="/img/icons/Iconetest.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <script src="https://kit.fontawesome.com/818a2b483a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 <body>
 <header class="nav-edit">  
    <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
          
            <a class="navbar-brand" href="#" ><img src="img/infoquest.png" alt="InfoQuest </>"></a>  
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  py-4 py-md-0 d-flex justify-content-end">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="biblioteca.php" role="button" aria-haspopup="true" aria-expanded="false">Minha biblioteca</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#">Categorias</a><i class="fa-solid fa-grip"></i>
                      <div class="dropdown-menu">
                    <a class="dropdown-item" href="errorpage.php">Mais populares</a>
                    <a class="dropdown-item" href="errorpage.php">Hist??ria da Computa????o</a>
                    <a class="dropdown-item" href="errorpage.php">Inform??tica</a>
                    <a class="dropdown-item" href="errorpage.php">Meus favoritos</a>
                  </div>
                </li>
                <form method="get" action="pesquisa.php">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <input id="search-area pesquisa" name="pesquisa" class="nav-link" type="search" placeholder="O que voc?? procura?" onblur="esconderCampoPesquisa()"/><i class="fa-brands fa-sistrix"></i></form>

                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configura????es</a><i class="fa-solid fa-gear"></i>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="editarperfil.php">Perfil</a>
                    <a class="dropdown-item" href="errorpage.php">Ajuda</a>
                    <a class="dropdown-item" href="index.php">Sobre n??s</a>
                    <a class="dropdown-item sair-alert" href="logout.php">Sair</a>
                  </div>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#">Contato</a><i class="fa-regular fa-comments"></i>
                </li>
              </ul>
            </div>
            
          </nav>    
    
  </header>
 <section> 
<footer class="rodape">
    
  <hr>
  <div class="rodape-links"><a class="links-fc" href="">FALE CONOSCO</a> | <a class="links-termos" href="">TERMOS</a> | <a class="links-voluntario" href="">SOBRE N??S</a></div> 
 </br>
  Copyright ?? InfoQuest - 2022 
 </footer>  
</section>
<script
  type="text/javascript"
  src="JS/javascript.js">
</script>
<script>
function mostrarPesquisa(){
  document.getElementById('pesquisa').style.display="inline-block";
 }
 function esconderCampoPesquisa() {
   this.style.display = 'none';
}
(function($) { "use strict";

$(function() {
    var header = $(".start-style");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 10) {
            header.removeClass('start-style').addClass("scroll-on");
        } else {
            header.removeClass("scroll-on").addClass('start-style');
        }
    });
});		 
</script>
<?php
// Fechar conex??o
mysqli_close($conn);
?>
</body>
</html>