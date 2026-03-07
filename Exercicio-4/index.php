<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <div class="box">
            <h1>Ranking de Curtidas</h1>

            <div class="inputs">
                <label for="receita1">Nome da receita 1:</label>
                <input type="text" id="receita1" name="receita1" placeholder="digite aqui">
                <label for="curtidas1">Curtidas 1:</label>
                <input type="number" id="curtidas1" name="curtidas1" placeholder="digite aqui">

                <label for="receita2">Nome da receita 2:</label>
                <input type="text" id="receita2" name="receita2" placeholder="digite aqui">
                <label for= "curtidas2">Curtidas 2:</label>
                <input type="number" id="curtidas2" name="curtidas2" placeholder="digite aqui">

                <label for="receita3">Nome da receita 3:</label>
                <input type="text" id="receita3" name="receita3" placeholder="digite aqui">
                <label for="curtidas3">Curtidas 3:</label>
                <input type="number" id="curtidas3" name="curtidas3" placeholder="digite aqui">
            </div>

            <button class="button">Ranking</button>

            <div class="resultado">

            </div>
        </div>
    </form>
</body>
</html>