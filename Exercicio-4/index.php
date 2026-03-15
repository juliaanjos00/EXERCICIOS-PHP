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

             <?php

              if($_POST){

                 $r1 = $_POST["receita1"];
                 $r2 = $_POST["receita2"];
                 $r3 = $_POST["receita3"];

                 $c1 = $_POST["curtidas1"];
                 $c2 = $_POST["curtidas2"];
                 $c3 = $_POST["curtidas3"];

                 $total = $c1 + $c2 + $c3;

                 echo "<p>🍽️ Ranking de curtidas: 🍽️</p>";

                 if($c1 > $c2 && $c1 > $c3){

                    echo "1º - $r1: $c1 curtidas <br>";

                    if($c2 > $c3){
                        echo "2º - $r2: $c2 curtidas <br>";
                        echo "3º - $r3: $c3 curtidas <br>";
                    } else {
                        echo "2º - $r3: $c3 curtidas <br>";
                        echo "3º - $r2: $c2 curtidas <br>";
                         }

                }    else if($c2 > $c1 && $c2 > $c3){

                     echo "1º - $r2: $c2 curtidas <br>";

                     if($c1 > $c3){
                        echo "2º - $r1: $c1 curtidas <br>";
                        echo "3º - $r3: $c3 curtidas <br>";
                     } else {
                        echo "2º - $r3: $c3 curtidas <br>";
                        echo "3º - $r1: $c1 curtidas <br>";
                        }

                 } else {

                    echo "1º - $r3: $c3 curtidas <br>";

                     if($c1 > $c2){
                        echo "2º - $r1: $c1 curtidas <br>";
                        echo "3º - $r2: $c2 curtidas <br>";
                     } else {
                        echo "2º - $r2: $c2 curtidas <br>";
                        echo "3º - $r1: $c1 curtidas <br>";
                        }

                }

                 echo "<br>Total de curtidas das receitas da Júlia: $total";

             }

            ?>


            </div>
        </div>
    </form>
</body>
</html>