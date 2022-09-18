<?php
    $nums = $_POST['nums'];
    arsort($nums);
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
    <h1>Resultado - Ex 2</h1>
    <?php foreach ($nums as $num): ?>
        <h2> <?= $num ?> </h2>
    <?php endforeach?>
</body>
</html>