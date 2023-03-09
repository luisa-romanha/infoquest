<?php
// Conecta ao banco de dados
$conn = mysqli_connect('127.0.0.1:3306', 'root', 'Lr074970!', 'infoquestbd');

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Atualiza as informações do usuário no banco de dados
$sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id_usuario=1";

if ($conn->query($sql) === TRUE) {
    echo "Perfil atualizado com sucesso!";
} else {
    echo "Erro ao atualizar perfil: " . $conn->error;
}

$conn->close();
?>