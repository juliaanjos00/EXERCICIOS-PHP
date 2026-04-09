<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1 class="titulo">Simulador de Frete</h1>

    <form method="post">
        <div class="box">

            <div class="inputs">

                <label>Valor do produto:</label>
                <input type="number" step="0.01" name="valor" placeholder="Digite o valor" required>

                <label>Código da região:</label>
                <input type="number" name="regiao" placeholder="Digite de 1 a 5" required>

            </div>

            <button class="button" type="submit">Calcular Frete</button>
            <?php

    $resultado = "";

    if (isset($_POST["valor"]) && isset($_POST["regiao"])) {

        $valor = floatval($_POST["valor"]);
        $regiao = intval($_POST["regiao"]);

        switch ($regiao) {

            case 1:
                $frete = 10;
                $regiaoNome = "Sudeste";
                break;

            case 2:
                $frete = 15;
                $regiaoNome = "Sul";
                break;

            case 3:
                $frete = 20;
                $regiaoNome = "Centro-Oeste";
                break;

            case 4:
                $frete = 25;
                $regiaoNome = "Nordeste";
                break;

            case 5:
                $frete = 30;
                $regiaoNome = "Norte";
                break;

            default:
                $resultado = "Região inválida! Não foi possível calcular o frete.";
                $frete = 0;
        }

        if ($regiao >= 1 && $regiao <= 5) {

            $total = $valor + $frete;

            $resultado = "Valor do produto: R$ " . number_format($valor, 2, ',', '.') .
                         " | Região: $regiaoNome" .
                         " | Frete: R$ " . number_format($frete, 2, ',', '.') .
                         " | Total a pagar: R$ " . number_format($total, 2, ',', '.');
        }
    }
    ?>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

        </div>
    </form>

</body>
</html>