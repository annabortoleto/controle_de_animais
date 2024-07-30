<?php
$servername = "localhost";
$username = "isfp";
$senha = "root";
$nomebd = "controle_de_animais";

$conn = new mysqli($servername, $username, $senha, $nomebd);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT animal.nome AS nome_animal, animal.especie, animal.raca, animal.data_nascimento, animal.castrado, pessoa.nome AS nome_pessoa, pessoa.email, pessoa.endereco, pessoa.bairro, cidade.nome_cidade, cidade.estado
        FROM animal
        INNER JOIN pessoa ON animal.id_pessoa = pessoa.id
        INNER JOIN cidade ON pessoa.id_cidade = cidade.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nome do Animal: " . $row["animal"]. "<br>";
        echo "Espécie: " . $row["especie"]. "<br>";
        echo "Raça: " . $row["raca"]. "<br>";
        echo "Data de Nascimento: " . $row["nascimento"]. "<br>";
        echo "Castrado: " . ($row["castrado"] ? 'Sim' : 'Não') . "<br>";
        echo "Nome do(a) dono(a): " . $row["nome"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Endereço: " . $row["endereco"]. "<br>";
        echo "Bairro: " . $row["bairro"]. "<br>";
        echo "Cidade: " . $row["cidade"]. "<br>";
        echo "Estado: " . $row["estado"]. "<br><br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>
