<?php
include('protect.php');
include('conexao.php');
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}

// Obtém o ID do usuário a partir da sessão
$id_usuario = $_SESSION["id_usuario"];


if( isset($_POST['nome'])|| isset($_POST['email']) || isset($_POST['senha'])) {
$id_usuario = $_SESSION["id_usuario"];
$sql = "SELECT * FROM usuarios WHERE id = $id_usuario"; // ou "WHERE username = '$nome_usuario'"
$resultado = mysqli_query($mysqli, $sql);

// Recuperar os dados do usuário
if ($dados_usuario = mysqli_fetch_assoc($resultado)) {
    // Preencher os valores iniciais dos campos do formulário com os dados do usuário
    $nome = $dados_usuario["nome"];
    $email = $dados_usuario["email"];
    $email = $dados_usuario["senha"];
    // etc.
} else {
    die("Usuário não encontrado.");
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $email = $_POST["senha"];
    // etc.
    
    // Atualizar os dados do usuário no banco de dados
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id_usuario";
    if (mysqli_query($mysqli, $sql)) {
        echo "Perfil atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar perfil: " . mysqli_error($mysqli);
    }
}

// Fechar a conexão com o banco de dados
mysqli_close($mysqli);
}


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
 </head>
 <body>
 <header class="nav-edit">  
    <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
          
            <a class="navbar-brand" href="img/Infoquest.png" target="_blank"><img src="" alt=""></a>  
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  py-4 py-md-0 d-flex justify-content-end">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Minha biblioteca</a>
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
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <input id="search-area" class="nav-link" type="search" placeholder="O que você procura?" /><i class="fa-brands fa-sistrix"></i>
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
<div class="editar_perfil">
    <h1>Editar Perfil</h1>
    <form action="atualizar.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome"><br><br>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email"><br><br>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha"><br><br>

      <input type="submit" value="Atualizar Perfil">
    </form>
  </div>

 <section> 
<footer class="rodape">
    
  <hr>
  <div class="rodape-links"><a class="links-fc" href="">FALE CONOSCO</a> | <a class="links-termos" href="">TERMOS</a> | <a class="links-voluntario" href="">SOBRE NÓS</a></div> 
 </br>
  Copyright © InfoQuest - 2022 
 </footer>  
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script
  type="text/javascript"
  src="js/script.js">
</script>
<script
  type="text/javascript"
  src="js/javascript.js">
</script>
</body>
</html>
