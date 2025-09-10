<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    Criar um formulário com os seguintes campos:
        Nome
        Data
        Av1
        Av2

        Criar uma página PHP para 
        resgatar e mostrar os dados
        E calcular a média entre Av1 e Av2, 
        mostrar o resultado da média
    -->
        <form method="post" action="#">
            Nome <input type="text" name="nome"><br>
            Data <input type="date" name="data"><br>
            Av1 <input type="text" name="av1"><br>
            Av2 <input type="text" name="av2"><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if(count($_POST)==0)exit;
        $nome=$_POST["nome"];
        $data=$_POST["data"];
        $av1=$_POST["av1"];
        $av2=$_POST["av2"];
        $media=($av1+$av2)/2;

        echo "Nome: $nome<br>";
        echo "Data: $data<br>";
        echo "Av1: $av1<br>";
        echo "Av2: $av2<br>";
        echo "Media: $media";

        ?>
</body>
</html>
