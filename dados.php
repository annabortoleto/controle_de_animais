<?php
//conexao
$servername = "127.0.0.1:3306";
$username = "ifsp";
$senha = "root";
$nomebd = "controle_de_animais";
$porta = 3306;

$conn = new mysqli($servername, $username, $senha, $nomebd, $porta);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->close();
?>
