<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EXERCICIO 2</title>
</head>
<body>

<form method="post">
    <div class="box">

        <h1>Exercício 2</h1>    
        <h2>Múltiplos de 8, 5 e 3</h2>
      
        <div class="inputs">
            <label for="number">Digite um número:</label>
            <input type="number" id="number" name="number">
        </div>

        <button class="button">Verificar</button>

        <p class="resultado">
            <?php

              if (isset($_POST["number"])) {
                $numero = $_POST["number"];

                if ($numero % 8 == 0 && $numero % 5 == 0 && $numero % 3 == 0) {
                     echo "Múltiplo de 8, 5 e 3";
                 } elseif ($numero % 8 == 0 && $numero % 5 == 0) {
                     echo "Múltiplo de 8 e 5";
                 } elseif ($numero % 8 == 0 && $numero % 3 == 0) {
                     echo "Múltiplo de 8 e 3";
                 } elseif ($numero % 5 == 0 && $numero % 3 == 0) {
                     echo "Múltiplo de 5 e 3";
                 } elseif ($numero % 8 == 0) {
                     echo "Múltiplo de 8";
                 } elseif ($numero % 5 == 0) {
                     echo "Múltiplo de 5";
                 } elseif ($numero % 3 == 0) {
                     echo "Múltiplo de 3";
                 } else {
                     echo "Não é múltiplo de 8, 5 ou 3";
                }
              }
             
            ?>
            
        </p>
    </div>
</form>

</body>
</html>


              