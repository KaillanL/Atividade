<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabela Dinâmica</title>
</head>
<body>

    <form method="post">
        <label>Digite o número de linhas:</label><br>
        <input type="number" name="num_linhas" min="1" required>
        <br>
        <label>Digite o número de colunas:</label><br>
        <input type="number" name="num_colunas" min="1" required>
        <br><br>
        <input type="submit" value="Criar Tabela">
    </form>

    <a href="index.php">Retornar ao menu principal</a><br><br>
</body>
</html>

<?php
if ($_POST) {
    $numLinhas = $_POST["num_linhas"];
    $numColunas = $_POST["num_colunas"];
    $linha = 1;
    echo "<h2>Tabela com $numLinhas linhas e $numColunas colunas:</h2>";
    echo "<table border='1'>";
    
    while ($linha <= $numLinhas) {
        echo "<tr>";
        
      
        $coluna = 1;
        while ($coluna <= $numColunas) {
            echo "<td>Linha $linha, Coluna $coluna</td>";
            $coluna++;
        }
        
        echo "</tr>";
        $linha++;
    }
    
    echo "</table>";
}
?>
