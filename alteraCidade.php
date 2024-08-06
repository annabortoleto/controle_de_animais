<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["alteraCidade"])) {
    $cidade_id = $_POST["cidade_id"];
    $nova_cidade = $_POST["nova_cidade"];
    $novo_estado = $_POST["novo_estado"];

    echo "A cidade foi alterada com sucesso!";
}
?>
