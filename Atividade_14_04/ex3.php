<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soma e Soma de Pares</title>
</head>
<body>

    <form method="post">
        <label>Digite o primeiro número (entre 10 e 100):</label><br>
        <input type="number" name="numero1" min="10" max="100" required>
        <br>
        <label>Digite o segundo número (entre 10 e 100):</label><br>
        <input type="number" name="numero2" min="10" max="100" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

        <a href="index.php">Retornar ao menu principal</a><br><br>
</body>
</html>

<?php
if ($_POST) {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

   
    if ($numero1 < 10 || $numero1 > 100 || $numero2 < 10 || $numero2 > 100) {
        echo "Por favor, digite números entre 10 e 100.";
    } else {
       
        $somaTotal = 0;
        $somaPares = 0;

    
        for ($i = $numero1; $i <= $numero2; $i++) {
            $somaTotal += $i;
            if ($i % 2 == 0) {
                $somaPares += $i;
            }
        }


        echo "<h2>Resultados:</h2>";
        echo "A soma total do intervalo é: $somaTotal<br>";
        echo "A soma dos números pares é: $somaPares";
    }
}
?>
