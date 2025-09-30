<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula08_01</h1>
    <form method="post" action="">
        Digite sua idade: <input type="number" name="idade" required><br>
        <input type="submit" value="Enviar!"><br>
    </form>
    
</body>
</html>

<?php
    if(count($_POST) == 0) exit; // SE NÃO TIVER NADA NO POST, SAI!!!
    $idade = $_POST["idade"];

    echo "Idade digitada: <b>$idade<b> <br>";
    
    if ($idade > 0 && $idade < 13) {
        echo "Você não pode criar uma conta. A idade mínima é de 13 anos.";
    } else if($idade < 17) {
        echo "Você pode criar uma conta com consentimento dos pais.";
    } else if($idade <= 64) {
        echo "Você pode criar uma conta. Bem vindo á nossa configuração.";
    } else if($idade >= 65) {
        echo "Você não pode criar uma conta. Lembre-se de verificar nossa configuração.";
    } else {
        echo "Idade inválida!!!";
    }
?>