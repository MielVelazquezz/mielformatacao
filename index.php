<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatação de Números e Datas</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>

        <div class="cx1">

            <h2>Formatação de Números e Datas</h2>

            <?php

                // 1
                $num1 = 1437.25;
                $num2 = number_format($num1, "2", ",", "");

                echo "<div class='cxnum1'> O número $num1 passa a ser R$ $num2 com <em>number_format()</em> </div> <br>";

                // 2
                date_default_timezone_set('America/Sao_Paulo');
                $dataAtual = date('Y:m:d');
                list($ano, $mes, $dia) = explode(":", $dataAtual);
                $dataFormatada = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);

                echo "<div class='cxnum1'>Data atual sem formatação: $dataAtual <br> 
                      Data atual formatada: <span>$dataFormatada</span> </div>";
                  

            ?>

            <button> <a href="http://localhost/formatacao_numeros/number.php"> Avançar </a> </button>

        </div>

    </main>

</body>

</html>