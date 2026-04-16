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

               $porte = trim($_POST["porte"]);
               $telefone_tutor = trim($_POST["telefone_tutor"]);
               $telefone_extra = trim($_POST["telefone_extra"]);
               $contato_extra = trim($_POST["contato_extra"]);

               if (
                  empty($pet) || empty($animal) || empty($responsavel) || empty($hospedagem)
                  || empty($porte) || empty($telefone_tutor)
                ) {

                  $erro = "Preencha todos os campos obrigatórios.";

                } else {

                  
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
                   switch ($porte) {
                        case "pequeno":
                           $porteNome = "Pequeno";
                           break;
                        case "medio":
                           $porteNome = "Médio";
                           break;
                        case "grande":
                           $porteNome = "Grande";
                           break;
                        default:
                           $porteNome = "Não definido";
                   }

         
                   if ($animal == "gato") {

                        $animalNome = "Gato";
                        $mensagem = "Área reservada: espaço interno silencioso.";
                        $bonus = "Brinquedos e arranhadores incluídos.";

                   } else {

                        $animalNome = "Cachorro";
                        $mensagem = "Área reservada: espaço com recreação externa.";
                        $bonus = "Passeios diários incluídos.";
                   }

                  
                   $contatoHtml = "";

                   if (!empty($telefone_extra)) {
                        $contatoHtml = "<p><strong>Contato adicional:</strong> $contato_extra - $telefone_extra</p>";
                   }

                   date_default_timezone_set("America/Sao_Paulo");
                   $data = date("d/m/Y H:i");

                   $resultado = "
                        <div class='resultado'>
                        <h3>Comprovante de Reserva 🐾</h3>

                        <p><strong>Nome do Pet:</strong> $pet</p>
                        <p><strong>Tipo de Animal:</strong> $animalNome</p>
                        <p><strong>Porte:</strong> $porteNome</p>
                        <p><strong>Responsável:</strong> $responsavel</p>

                        <p><strong>Contato principal:</strong> $telefone_tutor</p>

                        <hr>

                        <p><strong>Tipo de Hospedagem:</strong> $tipoHospedagem</p>
                        <p><strong>Duração:</strong> $duracao</p>
                        <p><strong>Valor:</strong> R$ $preco</p>

                        <hr>

                        <p>$mensagem</p>
                        <p>$bonus</p>

                        <hr>

                        <p><small>Reserva gerada em: $data</small></p>
                  </div>
                  ";
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

        <label>Porte</label>
        <select name= "porte">
            <option value="">Selecione</option>
            <option value="pequeno">Pequeno</option>
            <option value="medio">Médio</option>
            <option value="grande">Grande</option>
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

        <label>Telefone do Tutor</label>
        <input type="text" name="telefone_tutor">


            <label>Telefone adicional (opcional)</label>
            <input type="text" name="telefone_extra">

            <label>Quem é esse contato?</label>
            <input type="text" name="contato_extra" placeholder="digite aqui">

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