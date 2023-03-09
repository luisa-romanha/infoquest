<?php


// Verifica se o usuário está logado
if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}
// Conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1:3306', 'root', 'Lr074970!', 'infoquestbd');

// Verifica se houve erro na conexão
if ($conn->connect_error) {
  die('Erro na conexão: ' . $conn->connect_error);
}

$usuario_id = $_SESSION['id_usuario']; // ID do usuário logado
$interesse_id = $_POST['id_interesse']; // ID do interesse selecionado

$sql = "INSERT INTO usuarios_interesse (usuario_id, interesse_id) VALUES ($usuario_id, $interesse_id)";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
 echo "<script language='javascript' type='text/javascript'>
  alert('Interesses adicionados com sucesso!');window.location.
  href='painel.php'</script>";

} else {
    echo "Erro ao adicionar interesse: " . mysqli_error($conn);
}

// 3. Fechar a conexão com o banco de dados
mysqli_close($conn);
?>