<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["alteraAnimal"])) {
    $animal_id = $_POST["cidade_id"];
    $novAnimal = $_POST["novoAnimal"];
    $novaRaca = $_POST["novaRaca"];
    $novoNascimento = $_POST["novoNascimento"];

    echo "Os dados do animal foram alterados com sucesso!";
}
?>