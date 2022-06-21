<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>

<form action="" method="get">
    Digite seu salario:  <input type="money" name="money" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<?php

$salario = $_GET['money'];

if ($salario <= 300) {
    $salario += $salario * 0.5;
} else {
    $salario += $salario * 0.3;
}

echo $salario;

?>
    
</body>
</html>