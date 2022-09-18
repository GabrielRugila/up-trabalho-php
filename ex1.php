<?php 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    if ($sum > 10) {
        $sum += 8;
    } elseif ($sum <= 10) {
        $sum -= 5;
    }
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
    <h1>Resultado Calculo - Ex 1</h1>
    <h2><?= $sum ?></h2>
</body>
</html>