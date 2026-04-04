<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    <div class="box">

        <h1>Simulador de Frete</h1>
    
        <div class="inputs">

            <label>Valor do produto:</label>
            <input type="number" step="0.01" name="valor" placeholder="Digite o valor" required>

            <label>Código da região:</label>
            <input type="number" name="regiao" placeholder="Digite de 1 a 5" required>

        </div>

        <button class="button" type="submit">Calcular Frete</button>

        <div class="resultado">

        </div>

    </div>
</form>

</body>
</html>