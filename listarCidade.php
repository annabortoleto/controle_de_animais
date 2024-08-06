<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h>, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to bottom, #9187eb, #663d68);
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #fff;
            max-width: 600px;
            margin: 132px auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-style: italic;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 40px;
        }

        input[type="text"],
        input[type="radio"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #0c0101;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
   <?php
   include('includes/dados.php');
   $sql = "SELECT * FROM cidade";
 
   $result = mysqli_query($con, $sql);


   ?>

   <h1>LIsta de cidades</h1>
   <table align ="center" border="1" width = "500">
    <tr>
        <th>Od</th>
        <th>Nome</th>
        <th>Estado</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    <?php 
    while ($row = mysqli_fetch_array ($result)){
        echo "<tr>";
        echo "<td>". $row ['id']."</td>";
        echo "<td>". $row['nome']."</td>";
        echo "<td>". $row['estado']."</td>";

        echo "<td><a href='AlteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
        echo "<td><a href='DeletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>