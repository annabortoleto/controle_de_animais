<?php
//conexao
$servername = "127.0.0.1";
$username = "root";
$senha = "";
$nomebd = "controle";
$porta = 3306;

$conn = new mysqli($servername, $username, $senha, $nomebd, $porta);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->close();
?>
