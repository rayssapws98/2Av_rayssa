<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php 
            $nome = $_GET["nome"];
            $ano_nasc = $_GET["ano_nasc"];
            $email = $_GET["email"];
            $profi = $_GET["profi"];
            $estado_civil = $_GET["estado_civil"];
            $genero = $_GET["genero"];

            $idade = date('Y') - date('Y', strtotime($ano_nasc));

            echo "<h2>Informações do Cadastro:</h2>";
            echo "<p><strong>Nome Completo:</strong> $nome</p>";
            echo "<p><strong>Ano de Nascimento:</strong> $ano_nasc</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Profissão:</strong> $profi</p>";
            echo "<p><strong>Estado Civil:</strong> $estado_civil</p>";
            echo "<p><strong>Gênero:</strong> $genero</p>";
            echo "<p><strong>Idade:</strong> $idade anos</p>";
        ?>
        <button onclick="window.location.href='av2.html'">Voltar</button>
    </div>
</body>
</html>