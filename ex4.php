<?php
    $month = $_POST['month'];
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
    <h1>Resultado - Ex 4</h1>
    <?php if ($month >= 1 && $month <= 12) {
        switch ($month) {
            case 1:
                echo 'Janeiro';
                break;
            case 2:
                echo 'Fevereiro';
                break;
            case 3:
                echo 'Março';
                break;
            case 4:
                echo 'Abril';
                break;
            case 5:
                echo 'Maio';
                break;
            case 6:
                echo 'Junho';
                break;
            case 7:
                echo 'Julho';
                break;
            case 8:
                echo 'Agosto';
                break;
            case 9:
                echo 'Setembro';
                break;
            case 10:
                echo 'Outubro';
                break;
            case 11:
                echo 'Novembro';
                break;
            case 12:
                echo 'Dezembro';
                break;
    };} else {
        echo "Mes inexistente!";
    }
    ?>
</body>
</html>