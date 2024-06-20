<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 01 - PHP</title>
</head>
<body>
    <form method="post">
        <label>Digite o número inicial: <br></label>
        <input type="number" name="numInicial">
        <br>
        <label>Digite o número final: <br></label>
        <input type="number" name="numFinal">
        <br>
        <input type="submit" name="Calcule">
    </form>
    <a href="index.php">Retornar ao menu principal</a><br><br>
</body>
</html>

<?php
if ($_POST) {
    $numInicial = $_POST["numInicial"];
    $numFinal = $_POST["numFinal"];

    // Verificar se os números são válidos
    if ($numInicial <= 0 || $numFinal <= 0) {
        echo "Por favor, digite números maiores que zero.";
        exit;
    }

    // Verificar se o primeiro número é menor que o segundo
    if ($numInicial >= $numFinal) {
        echo "O primeiro número deve ser menor que o segundo número.";
        exit;
    }

    $quantidade = 0;
    $soma = 0;
    $i = $numInicial;

    echo "Números entre $numInicial e $numFinal:<br>";
    while ($i <= $numFinal) {
        echo $i . " ";
        $quantidade++;
        $soma += $i;
        $i++;
    }

    echo "<br><br>";
    echo "Quantidade de números gerados: $quantidade<br>";
    echo "Soma dos números apresentados: $soma<br>";
    
    // Calcular média
    $media = $soma / $quantidade;
    echo "Média dos números apresentados: $media<br>";

    // Verificar se há excesso de parâmetros
    if ($quantidade > 15) {
        echo "Excesso de parâmetros";
    } else {
        echo "Dentro dos parâmetros";
    }
}
?>
