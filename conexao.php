<?php

$usuario = 'root';
$senha = 'Lr074970!';
$database = 'infoquestbd';
$host = '127.0.0.1:3306';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>