<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par_Impar</title>
</head>
<body>
    <h1>Par_Impar</h1>
    <form method="post" action="">
        Digite um número <input type="number" name="numero">
        <input type="submit" value = "Verificar">
    </form>
<?php
if(count($_POST)==0)exit;
$numero=(int)$_POST["numero"];
$res=($numero%2==0)?"$numero é PAR":"$numero é ÌMPAR";
echo $res;
?>

</body>
</html>


<?php
/*
Criar um formulário para digitar um número
Imprimir o número digitado informando se é 
PAR ou Ímpar, utilizando operador ternário
*/
?>