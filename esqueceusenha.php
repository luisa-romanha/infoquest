<?php
include("conexao.php");

if(isset($_POST['ok'])){
    

    $email = $mysqli->escape_string($_POST['email']);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro[]="E-mail inválido.";

    }
 $sql_code = "SELECT senha, id_usuario FROM usuarios WHERE email = '$_SESSION[email]'";
 $sql_query = $mysqli-> query($sql_code) or die($mysqli->error);
 $dado = $sql_query->fetch_assoc();
 $total = $sql_query->num_rows;

 if($total == 0)
    $erro[] ="O e-mail informado não existe!";


 if(count($erro) == 0 && $total > 0){
    $novasenha = substr(md5(time()), 0, 6);
    $nscriptografada = md5(md5($novasenha));


    if(mail($email, "Sua nova senha!", "Olá, usuário! Aqui está a sua nova senha: ".$novasenha)){
        $sql_code ="UPDATE usuarios SET senha = '$nscriptografada' WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    
        if($sql_query)
        $erro[] = "Senha alterada com sucesso!";
    }

 }

}


?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>

    <form  method="POST" action="">
        <input  placeholder="Seu e-mail?" name="email" type="text">
        <input name="ok" value="ok" type="submit">    
        </form>
</body>
</html>