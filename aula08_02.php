<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_02</title> 
</head>
<body>
    <h1>Aula08_02 - 30/09/25</h1>
      <?php
      date_default_timezone_set("America/Sao_Paulo");
    $diaSemana = date('w');  // Retorna o dia da semana em número (0-6)
    echo "<h2>".date("d/m/Y H:i:s")."</h2>";
    echo "Dia da semana: $diaSemana<br>";
    switch ($diaSemana) {
        case 0:
            echo "Domingo";
        break;
        case 1:
            echo "Segunda-feira";
        break;
        case 2:
            echo "Terça-feira";
        break;
        case 3:
            echo "Quarta-feira";
        break;
        case 4:
            echo "Quinta-feira";
        break;
        case 5:
            echo "Sexta-feira";
        break;
        case 6:
            echo "Sábado";
        break;
        default:
            echo "Dia inválido";
    }
    echo"<hr>";
    $a="Uninove";
    echo md5($a);//02bb
?>
  
</body>
</html>