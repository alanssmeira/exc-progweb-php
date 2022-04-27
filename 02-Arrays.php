<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Arrays</title>
</head>
<body>

    <h1>Exercício 02 - Arrays</h1>
    <hr>

    <?php
    $pessoa1 = [
        "nome" => "Fernando Alves",
        "idade" => 29,
        "email" => "fernando@gmail.com",
        "sexo" => "masculino"
    ];
    
    $pessoa2 = [
        "nome" => "Cristina Souza",
        "idade" => 35,
        "email" => "souza.cristina@gmail.com",
        "sexo" => "feminino"
    ]
    ?>

        
    <h2><?=$pessoa1['nome']?></h2>
    <p>Idade: <?=$pessoa1['idade']?> anos</p>
    <p>Contato: <?=$pessoa1['email']?></p>
    <hr>

    <h2><?=$pessoa2['nome']?></h2>
    <p>Idade: <?=$pessoa1['idade']?> anos</p>
    <p>Contato: <?=$pessoa1['email']?></p>



</body>
</html>