<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - Idade</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h3>
        <?php 
            $nome = $_GET["nome"];
            $ano_nasc = $_GET["ano_nasc"];
            $ano_atual = "2024";
            $idade =  $ano_atual - $ano_nasc; 

            $status = "";
            if ($idade >= 1 && $idade <= 11) {
               $status = "criança" ;
            } elseif ($idade >= 12 && $idade <= 14) {
                $status = "Adolescente";
            } elseif ($idade >= 15 && $idade <= 18) {
                $status = "Jovem";
            } elseif ($idade >= 19 && $idade <= 64) {
                $status = "Adulto";
            } else {
                $status = "Idoso";
            } 

            echo "Nome: $nome <br>";
            echo "Idade: $idade anos <br>";
            echo "Status: $status";
        ?>
        </h3>
        <a href="av3.html"><button type="button">Voltar</button></a>
    </div>
</body>
</html> 