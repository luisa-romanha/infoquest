<?php

include('protect.php');

$conn = mysqli_connect('127.0.0.1:3306', 'root', 'Lr074970!', 'infoquestbd');

// Checar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
$sql = "SELECT nome_jogo, descricao, img_jogo FROM jogos";
$resultado = mysqli_query($conn, $sql);

?>
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
                    <a class="dropdown-item" href="errorpage.php">História da Computação</a>
                    <a class="dropdown-item" href="errorpage.php">Informática</a>
                    <a class="dropdown-item" href="errorpage.php">Meus favoritos</a>
                  </div>
                </li>
                <form method="get" action="pesquisa.php">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <input id="search-area pesquisa" name="pesquisa" class="nav-link" type="search" placeholder="O que você procura?" onblur="esconderCampoPesquisa()"/><i class="fa-brands fa-sistrix"></i></form>

                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configurações</a><i class="fa-solid fa-gear"></i>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="editarperfil.php">Perfil</a>
                    <a class="dropdown-item" href="errorpage.php">Ajuda</a>
                    <a class="dropdown-item" href="index.php">Sobre nós</a>
                    <a class="dropdown-item sair-alert" href="logout.php">Sair</a>
                  </div>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#">Contato</a><i class="fa-regular fa-comments"></i>
                </li>
              </ul>
            </div>
            
          </nav>    
    
  </header>

  <section class="destaques-area">
<section class="card-user">
 
   <div class="user-card skeleton">

        <div class="user-cover">
            <img id="avatar" class="user-avatar" src="img/girl-programmer.png" alt="user profile image">
        
        </div>

        <div class="user-details">
            <div class="user-name hide-text"><?php echo $_SESSION['nome']; ?></div> 
            <div class="user-email hide-text"><a id="nome"  class="link-name" href="">Seja bem-vindo!</a></div>
            <div class="user-text hide-text">Usuário autenticado.<i class="fa-solid fa-circle-check"></i></div>

        </div>

        <button class="contact-user hide-text"><a href="">Editar Perfil</a></button>
        
        

    </div>

</section>
<div id="destaques-cards">
<div class="name-destaque">
<article> Seus destaques: </article>


</div> 

</div>
<h1>Categorias:</h1>
<div class="container-categorias">

  <div class="card-categorias">
    <img class="img-categorias" src="https://images.unsplash.com/photo-1494122353634-c310f45a6d3c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ecd4e63ddbfbc55465d3d0abc16ec5c5&auto=format&fit=crop&w=2850&q=80" />
    <h3>História da Computação</h3>
    <p class="p-categorias">Aprenda sobre a evolução dos computadores.</p>
  </div>

  <div class="card-categorias">
    <img class="img-categorias" src="https://images.unsplash.com/photo-1503867913710-3f1656e94ac9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4ec81722964d9d4b89884c82bcb11642&auto=format&fit=crop&w=1027&q=80" />
    <h3>Categoria 2</h3>
    <p class="p-categorias">Descrição.</p>
  </div>
  <div class="card-categorias">
    <img class="img-categorias" src="https://images.unsplash.com/photo-1533756972958-d6f38a9761e3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d710493bc1818842db8ce47f887708f2&auto=format&fit=crop&w=2089&q=80" />
    <h3>Categoria 3</h3>
    <p class="p-categorias">Descrição.</p>
  </div>
  <div class="card-categorias">
    <img  class="img-categorias" src="https://images.unsplash.com/photo-1502957291543-d85480254bf8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=220d7cdb8357ec667ed2c4d4a3de3eb0&auto=format&fit=crop&w=1567&q=80" />
    <h3>Categoria 4</h3>
    <p class="p-categorias">Descrição.</p>
  </div>

  <div class="card-categorias">
    <img class="img-categorias" src="https://images.unsplash.com/photo-1533806481099-93f1242aea1e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0f2ba53e0ed1f9ecd16acb04ad0f70f7&auto=format&fit=crop&w=1950&q=80" />
    <h3>Categoria 5</h3>
    <p class="p-categorias">Descrição.</p>
  </div>
 </div>


<div class="jogo-carrousel-section">
    <div class="jogo-whitewrap">
        <div class="div-center">
            <h2 class="h4 jogo-carrousel-title">
                Recomendados para você:
            </h2>
            <br>
        </div>
        <div id="va_container">
            <button class="deals-scroll-left deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>
            <div class="jogo-carrousel-flexbox">
          <?php  while ($row = mysqli_fetch_array($resultado)) {
  $nome_jogo = $row['nome_jogo'];
  $descricao = $row['descricao'];
  $img_jogo = $row['img_jogo'];
  echo '<div class="jogo-card">';
  echo '<a class="link-plain" target="_blank">';
  echo '<img class="jogo-thumbnail" src="' . $img_jogo . '">';
  echo '<div class="jogo-title">' . $nome_jogo . '</div>';
  echo '<div class="jogo-start-from">' . $descricao . '</div>';
  echo '</a>';
  echo '</div>';
}
?>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
            </div>

            <button class="deals-scroll-right deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>
        </div>
<div class="jogo-carrousel-section">
    <div class="jogo-whitewrap">
        <div class="div-center">
            <h2 class="h4 jogo-carrousel-title">
                Todo mundo está jogando:
            </h2>
            <Br>
        </div>
        <div id="va_container">
            <button class="deals-scroll-left deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="jogo-carrousel-flexbox">
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
            </div>

            <button class="deals-scroll-right deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>
        </div>

  

</div>

</div>
<div class="jogo-carrousel-section">
    <div class="jogo-whitewrap">
        <div class="div-center">
            <h2 class="h4 jogo-carrousel-title">
                Explore outros jogos:
            </h2>
            <Br>
        </div>
        <div id="va_container">
            <button class="deals-scroll-left deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="jogo-carrousel-flexbox">
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
                <div class="jogo-card"> <a class="link-plain" target="_blank"> <img class="jogo-thumbnail"
                            src="https://via.placeholder.com/170/9796f0/1c1c1c?text=EM BREVE">
                        <div class="jogo-title">nome-jogo </div>
                        <div class="jogo-start-from"> Desculpe :( Ainda não temos essa descrição. </div>
                    </a> </div>
            </div>

            <button class="deals-scroll-right deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>
        </div>

</section>
</br>
 <section> 
<footer class="rodape">
    
  <hr>
  <div class="rodape-links"><a class="links-fc" href="">FALE CONOSCO</a> | <a class="links-termos" href="">TERMOS</a> | <a class="links-voluntario" href="">SOBRE NÓS</a></div> 
 </br>
  Copyright © InfoQuest - 2022 
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
    
//Animation

$(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover
    
$('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
        }
});	

//Switch light/dark

$("#switch").on('click', function () {
    if ($("body").hasClass("dark")) {
        $("body").removeClass("dark");
        $("#switch").removeClass("switched");
    }
    else {
        $("body").addClass("dark");
        $("#switch").addClass("switched");
    }
});  

})(jQuery); 
</script>
</body>
</html>