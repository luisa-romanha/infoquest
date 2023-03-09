
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Info Quest - Usuários </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table class="table-usuarios">

        <tr>
          <th>ID:</th>
          <th>Nome:</th>
          <th>Email:</th>
        </tr>

        <?php

        require_once('conexao.php');
         $sql = mysqli_query($mysqli, "SELECT * FROM usuarios") or die( 
            mysqli_error($mysqli) //caso haja um erro na consulta 
          );
           
          //pecorrendo os registros da consulta. 
          while($aux = mysqli_fetch_assoc($sql)) { 
            echo "-----------------------------------------<br />"; 
            echo "Id:".$aux["id_usuario"]."<br />"; 
            echo "Nome:".$aux["nome"]."<br />"; 
            echo "Email:".$aux["email"]."<br />";
         
            echo '<tr>'; 
          echo '<td>'. $aux['id_usuario'] .'</td>';
          echo '<td>'. $aux['nome'] .'</td>';
          echo '<td>'. $aux['email'] .'</td>';
          echo '</tr>';
          }
         ?>
    </table>
    <form class="excluir__form" id="excluirForm" method="POST" action="usuarios.php">
    <label class="excluir_usuario">
            <p class="excluir__input">Digite o id para excluir:</p>
            <input type="number" minlength="1" name="excluir" placeholder="" id="excluir">
          </label>
    </form>
    <?php 
    $excluirPorId = $_POST['excluir'];

    while($aux = mysqli_fetch_assoc($sql)) { 
    if($excluirPorId == $id_usuario){
echo 'o usuario é:'.$nome;
    }else{
echo 'usuario não encontrado';
    }
  }
    ?>
</body>
</html>