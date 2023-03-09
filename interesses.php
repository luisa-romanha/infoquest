<!DOCTYPE html>
<html>
<head>
  <title>Selecionar Interesse</title>
  <link rel="stylesheet" href="CSS/styleinte.css">
</head>
<body>
  <div class="wrapper">
  <h1>Selecione seu interesse:</h1>
  <div class="cols">
  <?php
// 1. Conectar ao banco de dados
$conexao = mysqli_connect('127.0.0.1:3306', 'root', 'Lr074970!', 'infoquestbd');
// 2. Executar a consulta SQL
$sql = "SELECT id_interesse, nome_interesse, img_interesse, descricao FROM interesses";
$resultado = mysqli_query($conexao, $sql);

// 3. Iterar através dos resultados
while ($linha = mysqli_fetch_assoc($resultado)) {
    $id = $linha['id_interesse'];
    $nome = $linha['nome_interesse'];
    $img = $linha['img_interesse'];
    $descricao = $linha['descricao'];

    // Imprimir os resultados em HTML
    echo '<div class="col" ontouchstart="this.classList.toggle(\'hover\');">';
    echo '<div class="container">';
    echo '<div class="front" style="background-image: url(' . $img . ')">';
    echo '<div class="inner">';
    echo '<p>' . $nome . '</p>';
    echo '<span>' .$id . '</span>';
    echo '</div>';
    echo '</div>';
    echo '<div class="back">';
    echo '<div class="inner">';
    echo '<p>' . $descricao . '</p>';

    // Formulário para adicionar interesse
    echo '<form method="POST" action="adicionar_interesse.php">';
    echo '<input type="hidden" name="interesse_id" value="' . $id . '">';
    echo '<button type="submit">Adicionar interesse</button>';
    echo '</form>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
// fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
		</div>
 </div>
</body>

</html>