<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EXERCICIO 3</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EXERCICIO 3</title>
</head>
<body>

<form method="post">
    <div class="box">

        <h1>Exercício 3</h1>
        <h2>Empréstimo de Equipamentos</h2>

        <div class="inputs">
            <label>Nome completo:</label>
            <input type="text" name="nome">
        </div>

        <div class="inputs">
            <label>Status:</label>
            <select name="status">
                <option value="ativo">Sócio Ativo</option>
                <option value="inadimplente">Sócio Inadimplente</option>
            </select>
        </div>

        <div class="inputs">
            <label> Quantidade de equipamentos emprestados:</label>
            <input type="number" name="quantidade">
        </div>

         <button class="button">Verificar</button>
         <p class="resultado">  
          <?php
            if($_POST){

                $nome = $_POST['nome'];
                $status = $_POST['status'];
                $quantidade= $_POST['quantidade'];

                if($status == "ativo" && $quantidade < 2){
                    echo "$nome - SEU EMPRÉSTIMO FOI AUTORIZADO";
                }else{
                    echo "$nome - SEU EMPRÉSTIMO FOI NEGADO";
                }
            }
         ?>
        </p>

    </div>
</form>

</body>
</html>