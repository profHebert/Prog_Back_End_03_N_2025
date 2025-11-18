<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09_01</title>
</head>
<body>
    <h1>Aula09_01 04/11/25</h1>
    <?php
    $cores=array("red","blue","green","orange","gray","yellow","purple","navy");
    /*
    Imprimir os valores da variável cores
    */
    // echo "<p style='color:{$cores[0]}'>{$cores[0]} </p>";
    // echo "<p style='color:{$cores[1]}'>{$cores[1]} </p>";
    echo "quantidade: ".count($cores)."<hr>";
    for($i=0;$i<count($cores);$i++){
        echo "<p style='color:{$cores[$i]}'>{$cores[$i]} </p>";
    }
    $dados=[
        "nome"=>"Bete",
        "idade"=>20,
        "email"=>"teste@teste.com"
    ];
    ?>
</body>
</html>