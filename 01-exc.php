<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    
    <h1>Exercício PHP</h1>
    <hr>

    <?php

    // Variáveis:
    $hoje = date('d/m/Y');
    $idade = date('Y') - 1994;

    // Contantes:
    const MEU_NOME = "Alan Sobreira";
    const MINHA_CIDADE = "São Paulo";

    ?>
    <p> Hoje é <?=$hoje?>. <?=MEU_NOME?> tem <?=$idade?> anos e nasceu em <?=MINHA_CIDADE?>. </p>

</body>
</html>