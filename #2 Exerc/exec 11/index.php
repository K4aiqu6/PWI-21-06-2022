<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>

</head>

<body>

<form action="" method="get">
    Digite um número:  <input type="numero1" name="numero1" />
    <br/>
    Digite outro número:  <input type="numero2" name="numero2" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<?php

$num1 = $_GET['numero1'];

$num2 = $_GET['numero2'];



for($num2; $num2 > 0; $num2--){

    echo $num1;

    if($num2 != 1) echo " + ";

}

?>

</body>

</html>