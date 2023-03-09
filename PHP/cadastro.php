<?php
require_once('conectar.php');
echo "<p>Olá Mundo, testando</p>";
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$senha = MD5($_POST['senha']);

// Inserir dados na tabela usuarios
$sql = "INSERT INTO usuarios (id_usuario, nome, img_user, email, data_nasc, senha) VALUES (null, '$nome', null, '$email', '$data_nasc', '$senha');";
$res = mysqli_query($connect, $sql);
if($res){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='my.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }

// $check="SELECT * FROM usuarios WHERE Email = '$email';";
// $rs = mysqli_query($connect,$check);
// $data = mysqli_fetch_array($rs, MYSQLI_NUM);
// echo "foo is $data";

  // if($usuario == "" || $usuario == null){
  //   echo"<script language='javascript' type='text/javascript'>
  //   alert('O campo usuario deve ser preenchido');window.location.href='
  //   cadastro.html';</script>";

  //   }else{
  //     if($row[0] > 0){

  //       echo"<script language='javascript' type='text/javascript'>
  //       alert('Esse usuario já existe');window.location.href='
  //       cadastro.html';</script>";
  //       die();

  //     }else{
  //       $query = "INSERT INTO usuarios (id_usuario, nome, user, img_user, email, data_nasc, senha) VALUES (null, '$nome', '$usuario', null, '$email', '$data_nasc', '$senha')";
  //       $insert = mysqli_query($query,$connect);

  //       if($insert){
  //         echo"<script language='javascript' type='text/javascript'>
  //         alert('Usuário cadastrado com sucesso!');window.location.
  //         href='usuarios.html'</script>";
  //       }else{
  //         echo"<script language='javascript' type='text/javascript'>
  //         alert('Não foi possível cadastrar esse usuário');window.location
  //         .href='cadastro.html'</script>";
  //       }
  //     }
  //   }
 ?>