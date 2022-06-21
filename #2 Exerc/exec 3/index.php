<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>3</title>
</head>
<body>
   
<?php

$A = 5;
$B = 2;
$C = 3;
$D = 4;

$soma = $A + $C;
$mult = $B + $D;

if ($soma > $mult) {
    echo "A soma A + C = ".$soma. "é maior que a multiplicação B * D  = ".$mult;
}

elseif ($soma < $mult) {
    echo "A soma A + C = ".$soma. " é menor que a multiplicaçao B * D = ".$mult;
}

else {
    echo "A soma A + C = ".$soma. " é igual a multiplicaçao B * D = " .$mult;
}


?>

</body>
</html>