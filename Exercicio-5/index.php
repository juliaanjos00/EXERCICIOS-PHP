<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>
 <body>

    <form method="post">
        <div class="box">
            <h1>Sistema De Classificação de Receita</h1>

            <div class="inputs">

                <label for="tempo">Tempo de preparo em minutos:</label>
                <input type="number" name="tempo" id="tempo" placeholder="Digite o tempo">

                <label for="ingredientes">Número de ingredientes:</label>
                <input type="number" name="ingredientes" id="ingredientes" placeholder="Digite a quantidade">

                <label for="etapas">Número de etapas:</label>
                <input type="number" name="etapas" id="etapas" placeholder="Digite as etapas">

            </div>

            <button class="button">Classificar</button>

            <div class="resultado">

                <?php

                 $classe = "";
                 $resultado = "";

                 if($_POST){
                    $tempo = $_POST["tempo"];
                    $ingredientes = $_POST["ingredientes"];
                    $etapas = $_POST["etapas"];

                    if($tempo > 60 && $ingredientes > 10 && $etapas > 7){
                        $classe = "desafiadora";
                        $resultado = "Receita Desafiadora! <br>Essa receita exige muita dedicação, só para quem ama cozinhar de verdade!";
                    }
                    elseif($tempo > 60 || $ingredientes > 10 || $etapas > 7){
                            $classe = "dificil";
                            $resultado = "Receita Difícil! <br>Essa receita exige experiência e atenção durante o preparo.";
                        }
                    elseif(
                            ($tempo >= 31 && $tempo <= 60) ||
                            ($ingredientes >= 6 && $ingredientes <= 10) ||
                            ($etapas >= 5 && $etapas <= 7)
                        ){
                            $classe = "moderada";
                            $resultado = "Receita Moderada! <br>Essa receita tem um nível intermediário de preparo.";
                            }
                    else{
                            $classe = "facil";
                            $resultado = "Receita Fácil! <br>Essa receita é perfeita para o dia a dia, rápida e simples de preparar.";
                        }
                    }
                    echo "<div class='resultado $classe'>$resultado</div>";
                ?>
              
            </div>
        </div>
    </form>

 </body>
</html>