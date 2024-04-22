<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real pra Dólar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php 
        $valor_real = $_GET["valor_real"];
        $valor_dolar = $valor_real / 5.20;

        echo "Você informou R$". number_format($valor_real,2,",",".")."<br>";
        echo "Esse valor em Dólar é UU$". number_format($valor_dolar,2,",",".");

        ?>
       <button onclick="window.location.href='av4.html'">Voltar</button>
    </div>
</body>
</html>