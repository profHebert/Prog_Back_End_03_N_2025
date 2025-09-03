<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04_01</title>
</head>
<body>
    <h1>Aula04_01 - 02/09/25</h1>
    <?php
    //constantes
    //var_dump
    define("USER","admin");
    $nome="Bete";//string
    $dia=2;//inteiro
    $nota=7.8;//float
    $cep="01012123";
    /*
    decimal 01234567 8  9 10
    octal   01234567 10
    binario 01 10
    hexadecimal 0123456789ABCDEF 10
    */


    //echo USER." - ".$nome." - ".$dia." - ".$nota;
    echo USER." - $nome - $dia - $nota";

    echo "<br>cep=$cep";
    echo '<br>cep=$cep';
    $x=(int)$nota;
    echo"<br>x=$x";

   // var_dump($nome);

    //Gerar a saída:
    //admin - Bete - 2 - 7.8


    ?>
</body>
</html>