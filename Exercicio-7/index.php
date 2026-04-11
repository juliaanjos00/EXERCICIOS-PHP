<!DOCTYPE html>
<html lang="pt-br">
 <head>

    <meta charset="UTF-8">
    <title>Hotel para Pets</title>
    <link rel="stylesheet" href="style.css">

 </head>

 <body>
        
     <div class="intro">

      <img src="dog-removebg-.png" class="dog">
      <img src="cat.png" class="cat">

     </div>

     <div class="container">

      <h2>🐾 Hotel Pet</h2>

     <?php

        $erro = "";
        $resultado = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {

           $pet = trim($_POST["pet"]);
           $animal = trim($_POST["animal"]);
           $responsavel = trim($_POST["responsavel"]);
           $hospedagem = trim($_POST["hospedagem"]);

         if (empty($pet) || empty($animal) || empty($responsavel) || empty($hospedagem)) {

            $erro = "Preencha todos os campos.";

         } else {

            $pet = htmlspecialchars($pet);
            $animal = htmlspecialchars($animal);
            $responsavel = htmlspecialchars($responsavel);
            $hospedagem = htmlspecialchars($hospedagem);

            switch ($hospedagem) {

                 case "diaria":
                    $duracao = "1 dia";
                    $tipoHospedagem = "Diária";
                    $preco = 50;
                    break;

                 case "fim":
                    $duracao = "3 dias";
                    $tipoHospedagem = "Fim de semana";
                    $preco = 120;
                    break;

                 case "semanal":
                    $duracao = "7 dias";
                    $tipoHospedagem = "Semanal";
                    $preco = 250;
                    break;

                 default:
                    $duracao = "Não definida";
                    $tipoHospedagem = "Não definida";
                    $preco = 0;
            }

             if ($animal == "gato") {

                $animalNome = "Gato";
                $mensagem = "Área reservada: espaço interno silencioso.";
                $bonus = "Brinquedos e arranhadores incluídos.";

             } 

             else {

                $animalNome = "Cachorro";
                $mensagem = "Área reservada: espaço com recreação externa.";
                $bonus = "Passeios diários incluídos.";
              }

                date_default_timezone_set("America/Sao_Paulo");
                $data = date("d/m/Y H:i");

               $resultado = "
                <div class='resultado'>
                <h3>Comprovante de Reserva 🐾</h3>

                <p><strong>Nome do Pet:</strong> $pet</p>
                <p><strong>Tipo de Animal:</strong> $animalNome</p>
                <p><strong>Responsável:</strong> $responsavel</p>

                <hr>

                <p><strong>Tipo de Hospedagem:</strong> $tipoHospedagem</p>
                <p><strong>Duração:</strong> $duracao</p>
                <p><strong>Valor:</strong> R$ $preco</p>

                <hr>

                <p>$mensagem</p>
                <p>$bonus</p>

                <hr>

                <p><small>Reserva gerada em: $data</small></p>
                </div>";
              }
                }

                if (!empty($erro)) {
                    echo "<div class='erro'>$erro</div>";
                }

     ?>

     <form method="POST">

        <label>Nome do Pet</label>
        <input type="text" name="pet">

        <label>Tipo de Animal</label>
        <select name="animal">
            <option value="">Selecione</option>
            <option value="gato">Gato</option>
            <option value="cachorro">Cachorro</option>
        </select>

        <label>Nome do Responsável</label>
        <input type="text" name="responsavel">

        <label>Tipo de Hospedagem</label>
        <select name="hospedagem">
            <option value="">Selecione</option>
            <option value="diaria">Diária</option>
            <option value="fim">Fim de semana</option>
            <option value="semanal">Semanal</option>
        </select>

        <button type="submit">Gerar Reserva</button>

        </form>

        <?php

            if (!empty($resultado)) {
                echo $resultado;
            }

        ?>

      </div>

  </body>
 </html>