<?php
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $idade = $_POST['idade'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>algo</title>
</head>
<body>
    <h1>Resultado - Ex 3</h1>
    <?php if ($idade > 25): ?>
        <h2><?= "Nome: $nome" ?></h2> 
        <h2><?=    "Genero: $genero" ?></h2> 
        <h2><?=    "Você pode se cadastrar" ?></h2> 
    <?php elseif ($idade <= 25): ?>
        <h2><?= "Nome: $nome" ?></h2> 
        <h2><?=    "Genero: $genero" ?></h2> 
        <h2><?=    "Você não pode se cadastrar" ?></h2> 
    <?php endif ?>
</body>
</html>