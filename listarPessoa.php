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
   $sql = "SELECT * FROM pessoa";
   $result = mysqli_query($con, $sql);


   ?>

   <h1>Consulta de donos</h1>
   <table align ="center" border="1" width = "500">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>Id da cidade</th>
        <th>CEP</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array ($result)){
        echo "<tr>";
        echo "<td>". $row ['id']."</td>";
        echo "<td>". $row['nome']."</td>";
        echo "<td>". $row['email']."</td>";
        echo "<td>". $row['endereço']."</td>";
        echo "<td>". $row['bairro']."</td>";
        echo "<td>". $row['id_cidade']."</td>";
        echo "<td>". $row['cep']."</td>";

        echo "<td><a href='AlteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
        echo "<td><a href='DeletaPessoa.php?id=".$row['id']."'>Deletar</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>