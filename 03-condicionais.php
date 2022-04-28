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
    // as fórmulas no começo faz com que todos os calculos sejam processados antes das condiionais

    if ($salario1 < 500) {
        echo "<p> O salário é de R$ $salario1, portanto o aumento é de 15%, resultando em R$ $salario2.</p>";
    } elseif ($salario1 <= 1000) {
        echo "<p> O salário é de R$ $salario1, portanto o aumento é de 10%, resultando em  R$ $salario3.</p>";
    } else {
        echo "<p> O salário é de R$ $salario1, portanto o aumento é de 5%, resultando em R$ $salario4.</p>";
    }
    ?>

    <!-- ******************** CORREÇÃO ******************** -->

    <?php

        $salario = 1900;

        // Obs.: declarar esta variável inicialmente é algo opcional
        $novoSalario = 0;

        if ($salario < 500) {
            echo $novoSalario = $salario * 1.15;

        } elseif ($salario <= 1000) {
            echo $novoSalario = $salario * 1.10;

        } else {
            $novoSalario = $salario * 1.05;
        }

        // refatoração - um cód que serve para toda a condicional
        echo "<p> O salário é de R$ $salario, portanto o aumento é de 5%, resultando em R$ $novoSalario.</p>";
        
    ?>

    <!-- Equivalente ao echo, mas mais adequado para deixar o PHP que roda no srevidor mais leve -->
    <p>O salário é de R$ <?=$salario?>, portanto o aumento é de 5%, resultando em R$ <?=$novoSalario?>.</p>

    <!-- 
        number_format(
            valor,
            quantidade de casas decimais,
            "separador de casa decimal"
            "separador de milhar"
        )
     -->

     <p>
         R$ <?=number_format($salario, 2, ",", ".")?>
          e R$ <?=number_format($novoSalario, 2, ",", ".")?>
    </p>

</body>

</html>