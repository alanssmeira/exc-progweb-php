<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Condicionais</title>
</head>

<body>

    <h1>Exercício 03 - Condicionais</h1>
    <hr>

    <?php
    $salario1 = 1900;

    $salario2 = $salario1 * 1.15;
    $salario3 = $salario1 * 1.10;
    $salario4 = $salario1 * 1.05;

    if ($salario1 < 500) {
        echo "<p> O salário é de R$ $salario1, portanto o aumento é de 15%, resultando em R$ $salario2.</p>";
    } elseif ($salario1 <= 1000) {
        echo "<p> O salário é de R$ $salario1, portanto o aumento é de 10%, resultando em  R$ $salario3.</p>";
    } else {
        echo "<p> O salário é de R$ $salario1, portanto o aumento é de 5%, resultando em R$ $salario4.</p>";
    }
    ?>

</body>

</html>