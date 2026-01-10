<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EXERCICIO 1</title>
</head>
<body>

<form method="post">
    <div class="box">

        <h1>Exercício 1</h1>    
        <h2>Monitor de Temperatura</h2>
      
         <div class="inputs">

              <label for="manha"> Temperatura da Manhã °C: </label>
              <input type="number" id="manha" name="manha">

              <label for="tarde"> Temperatura da Tarde °C: </label>
              <input type="number" id="tarde" name="tarde">

         </div>

          <button class="button"> Calcular </button>

         <?php
           if ($_POST['manha'] == "" || $_POST['tarde'] == "") {
            echo "<p><strong>Não é possível calcular com os campos vazios.</strong></p>";
            } else {
              $manha = $_POST['manha'];
              $tarde = $_POST['tarde'];

              $media = ($manha + $tarde) / 2;

              if ($media > 25) {
                  $media = $media + 3;
              } else {
                  $media = $media - 2;
              }

              echo "<p><strong> A temperatura final é de: $media °C</strong></p>";
          }
        ?>

    </div>
</form>

</body>
</html>