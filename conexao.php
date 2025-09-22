<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco
$usuario = "root";      // usuário do banco
$senha   = "";
$banco   = "muraldepedidos"; 

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");


$cloud_name = "muraldepedidos";
$api_key    = "313753958388259";
$api_secret = "Er6DPBmLgoIOhHGKri8pIVkRxLQs";  

?>

