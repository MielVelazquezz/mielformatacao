<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <main>

        <div class="cx3">

            <h2>Resultado:</h2>

            <?php

                $vmenor = $_POST['vmenor'];
                $vmaior = $_POST['vmaior'];

                if ($vmenor < $vmaior) {

                    $soma = 0;

                    for ($vmenor; $vmenor <= $vmaior; $vmenor++) {
                        $soma += $vmenor;
                    }

                    echo "<div class='css'>A soma de todos os números dos dois valores é <span>$soma</span></div>";

                } 

                else {
                    echo '<div class="error">Erro: O valor menor é maior ou igual ao valor maior, tente novamente.</div>';
                }

            ?>

            <button onclick="history.go(-1)">Voltar</button>

        </div>

    </main>

</body>
</html>
