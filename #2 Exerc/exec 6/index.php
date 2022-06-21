<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 4</title>
</head>

<form action="" method="get">
    Digite seu Sexo:  <input type="sexo" name="sexo" />
    <br/>
    Digite seu Peso:  <input type="peso" name="peso" />
    <br/>
    Digite sua Altura:  <input type="altura" name="altura" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<body>
    

    <?php

        $peso = $_GET['peso'];
        $sexo = $_GET['sexo'];
        $altura = $_GET['altura'];

        if($sexo = 'm'){
            if ($altura >= '1.76' && $peso <= '1.86'){
                if($peso >= '74' && $peso <= '86'){
                    echo 'Você está saudável';
                } elseif($peso < '74'){
                    echo "Você está abaixo do peso";
                } else{
                    echo "Você está acima do peso";
                }
            } else{
                echo "Valor Fora do Padrão";
            }

        } elseif($sexo == 'f'){
            if ($altura >= '1.50' && $altura <= '1.60'){
                if($peso >= '48' && $peso <= '56'){
                    echo "Você está saudável";
                } elseif($peso < '48'){
                    echo "Você está abaixo do peso";
                } else{
                    echo "Você está acima do peso";
                }
            } else{
                echo "Valor Fora do Padrão";
            }
        }
    ?>
</body>
</html>