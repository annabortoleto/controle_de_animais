<?php
include ("dados.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

$sql = "UPDATE donos SET nome='$nome', email='$email', endereco='$endereco', bairro='$bairro' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro ao atualizar os dados: " . $conn->error;
}

$conn->close();
?>