<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_02</title>
</head>
<body>
    <h1>Aula05_02 - 09/09/25</h1>
    <?php
    //echo "<pre>";print_r($_REQUEST);echo "</pre>";
    $nome=$_POST["nome"];
    $senha=$_POST["senha"];
    echo "Nome: $nome<br>";
    echo "Senha: $senha<br>";
    ?>
</body>
</html>