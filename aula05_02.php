<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_02</title>
</head>
<body>
    <h1>Aula05_02 - 09/09/25</h1>
    <?php 
        echo "<pre>";print_r($_REQUEST);echo "</pre>";
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $av1 = $_POST['av1'];
        $av2 = $_POST['av2'];
        $media = ($av1 + $av2) / 2;
        echo "Nome: $nome<br>";
        echo "Data: $data<br>";
        echo "Av1: $av1<br>";
        echo "Av2: $av2<br>";
        echo "Media entre av1($av1) e av2($av2) é $media";
    ?>
</body>
</html>