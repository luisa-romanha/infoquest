<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo '<script>alert("Preencha seu e-mail")</script>';
    } else if(strlen($_POST['senha']) == 0) {
        echo '<script>alert("Preencha sua senha")</script>';
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Criptografa a senha com Argon2i
        $senha_hash = password_hash($senha, PASSWORD_ARGON2I);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            // Verifica se a senha digitada corresponde ao hash salvo no banco de dados
            if(password_verify($senha, $usuario['senha'])) {

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painel.php");

            } else {
                echo '<script>alert("Falha ao logar! E-mail ou senha incorretos")</script>';
            }

        } else {
            echo '<script>alert("Falha ao logar! E-mail ou senha incorretos")</script>';
        }

    }

}
?>
<html>
<head>
<title>InfoQuest - Login </title>
<link rel="stylesheet" href="CSS/stylelogin.css">
</head>
<body>
<!-- <form method="POST" action="login.php">
<label>Email:</label><input type="text" name="email" id="email"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
Ainda não possui seu cadastro?
<a href="cadastro.html">Clique aqui para cadastrar-se agora!</a>
</form> -->
<!-- Wrapper Area -->
<div class="wrapper__area" id="wrapper_Area">
    <!-- Forms Area -->
    <div class="forms__area">
      <!-- Login Form -->
      <form class="login__form" id="loginForm" method="POST" action="">
        <!-- Form Title -->
        <h1 class="form__title">Entre na sua Conta!</h1>
        <!-- inputs Groups -->
        <div class="input__group">
          <label class="field">
            <input type="text" name="email" placeholder="Email" id="loginEmail">
          </label>
          <span class="input__icon"><i class="bx bx-user"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
          <label class="field">
            <input type="password" name="senha" placeholder="Senha" id="loginPassword">
          </label>
          <span class="input__icon"><i class="bx bx-lock"></i></span>
          <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="form__actions">
          <div class="forgot_password"><a href="esqueceusenha.php" >Esqueceu a senha?</a></div>
        </div>
        <!-- Login Button -->
        <button type="submit" class="submit-button" id="loginSubmitBtn">Entrar</button>
      
      </form> <!-- End Login Form -->
  
     
    </div><!-- End Forms Area -->
  
    <!-- Aside Area -->
    <div class="aside__area" id="aside_Area">
      <div class="login__aside-info">
        <h3>Você voltou!</h3>
        <img src="https://d.top4top.io/p_1945xjz2y1.png" alt="Image">
        <p>Ainda não possui uma conta? Faça o seu cadastro!
      <br/>
      <br/>
      É simples, fácil e rápido.
          Fazendo o seu cadastro você poderá selecionar o seus jogos favoritos e ficar sempre ligado nos seus progressos.</p>
        <a href="cadastro.html"><button id="aside_signUp_Btn">Cadastrar-se</button></a>
      </div>
    </div>
  </div>
  <!-- End Wrapper Area -->
  
</body>
</html>