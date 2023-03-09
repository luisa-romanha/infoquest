<?php
include('conexao.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$senha = $_POST['senha'];
$confirmaSenha =$_POST['confirma_senha'];
$aceite_termos= $_POST['aceite_termos'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = mysqli_query($mysqli, $sql);



  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo email deve ser preenchido');window.location.href='
    cadastro.html';</script>";


    }else{
      if( $senha != $confirmaSenha) {
        echo '<script>alert("A senha e a confirmação de senha não coincidem")</script>';
    }  else {

      if (mysqli_num_rows($result) > 0) {

        echo '<script>alert("Esse e-mail já está cadastrado, faça o seu login!") 
        </script>';
       

      }else{
        $criptografada = password_hash($senha, PASSWORD_ARGON2I);
        $sql = "INSERT INTO usuarios (id_usuario, nome, img_user, email, data_nasc, senha) VALUES (null, '$nome', null, '$email', '$data_nasc', '$criptografada');";
        $res = mysqli_query($mysqli, $sql);

        if($res){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='interesses.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
      
      }
    }
?>


<html>
<head>
<title>InfoQuest - Cadastro </title>
<link rel="stylesheet" href="CSS/stylelogin.css">
</head>
<body>
<!-- Wrapper Area -->
<div class="wrapper__area" id="wrapper_Area">
    <!-- Forms Area -->
    <div class="forms__area">
      <!-- Sign Up Form -->
      <form class="sign-up__form" id="signUpForm" method="POST" action="">
        <!-- Form Title -->
        <h1 class="form__title">Cadastre-se!</h1>
        <!-- inputs Groups -->
        <div class="input__group">
          <label class="field">
            <p class="info__input">Digite seu nome:</p>
            <input type="text" name="nome" placeholder="Nome" id="nome">
          </label>
          <span class="input__icon"><i class="bx bx-user"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
          <label class="field">
            <p class="info__input">Digite seu email:</p>
            <input type="text" name="email" placeholder="Email@examplo.com" id="email">
          </label>
          <span class="input__icon"><i class="bx bx-at"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
            <label class="field">
              <p class="info__input">Data de Nascimento:</p>
              <input type="date" name="data_nasc" placeholder="dd/mm/aaaa" id="data_nasc">
            </label>
            <span class="input__icon"><i class="bx bx-lock"></i></span>
            <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
            <small class="input__error_message"></small>
          </div>
        <div class="input__group">
          <label class="field">
            <p class="info__input">Escolha uma senha:</p>
            <input type="password" name="senha" placeholder="Senha123$#%&..." id="senha">
          </label>
          <span class="input__icon"><i class="bx bx-lock"></i></span>
          <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group confirm__group">
          <label class="field">
            <input type="password" name="confirma_senha" placeholder="Confirmar senha" id="confirmaSenha">
          </label>
          <span class="input__icon"><i class="bx bx-lock"></i></span>
          <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="form__actions">
    <label for="checkboxInput" class="link-terms">
      <input type="checkbox" name="aceite_termos" value="1" id="checkboxInput">
      <span class="checkmark"></span>
      <a href="termos.html" target="_blank"><span>Aceito os termos de acordo!</span></a>
    </label>
  </div>
        <!-- Sign Up Button -->
        <button type="submit" class="submit-button" id="signUpSubmitBtn">Cadastrar</button>
      
        


      </form> <!-- End Sign Up Form -->
    </div><!-- End Forms Area -->
    <!-- Aside Area -->
    <div class="aside__area" id="aside_Area">
      <div class="sign-up__aside-info">
        <h3>Bem-vindo!</h3>
        <img src="https://e.top4top.io/p_1945sidbp2.png" alt="Image">
        <p>Já tem uma conta? Faça o seu login.</p>
        <a href="login.php"><button id="aside_signIn_Btn">Login</button></a>
      </div>
    </div>
  </div>
  <!-- End Wrapper Area -->
  
</body>
</html>




 