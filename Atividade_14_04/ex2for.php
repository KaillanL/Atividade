<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 02 - for</title>
</head>
<body>
 
    <form method="post">
        <label>Digite um número para ver sua tabuada (entre 1 e 10):</label><br>
        <input type="number" name="numero">
        <br>
        <input type="submit" value="Mostrar Tabuada">
    </form>

    <a href="index.php">Retornar ao menu principal</a><br><br>
</body>
</html>

<?php
if ($_POST) {
    $numero = $_POST["numero"];


    if ($numero < 1 || $numero > 10) {
        echo "Por favor, digite um número entre 1 e 10.";
    } else {
        echo "<h2>Tabuada do número $numero:</h2>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
}
?>
