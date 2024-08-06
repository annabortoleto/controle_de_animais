<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include('includes/dados.php');
   $sql = "SELECT * FROM animal";
   $result = mysqli_query($con, $sql);


   ?>

   <h1>Lista de animais</h1>
   <table align ="center" border="1" width = "500">
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Raça</th>
        <th>Castrado</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    <?php //mysqli_fetch_array lê uma linha por vez
    while ($row = mysqli_fetch_array ($result)){
        echo "<tr>";
        echo "<td>". $row ['id']."</td>";
        echo "<td>". $row['nome']."</td>";
        echo "<td>". $row['especie']."</td>";
        echo "<td>". $row['raca']."</td>";
        echo "<td>". $row['castrado']."</td>";

        echo "<td><a href='AlteraAnimais.php?id=".$row['id']."'>Alterar</a></td>";
        echo "<td><a href='DeletaAnimais.php?id=".$row['id']."'>Deletar</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>