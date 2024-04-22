<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
    <?php
// Verifica se os dados foram enviados
if(isset($_POST['nome']) && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['nota4'])) {
    $nome = $_POST['nome'];
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota3 = floatval($_POST['nota3']);
    $nota4 = floatval($_POST['nota4']);
    
    // Verifica se os campos não estão vazios e se as notas estão no intervalo de 0 a 10
    if(!empty($nome) && !empty($nota1) && !empty($nota2) && !empty($nota3) && !empty($nota4) && $nota1 <= 10 && $nota2 <= 10 && $nota3 <= 10 && $nota4 <= 10) {
        // Calcula a média
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        
        // Determina o status do aluno
        if ($media >= 6 && $media <= 10) {
            $status = 'APROVADO';
        } elseif ($media >= 5 && $media < 7) {
            $status = 'RECUPERAÇÃO';
        } elseif ($media >= 0 && $media < 6) {
            $status = 'REPROVADO';
        } else {
            $status = 'Nota inválida';
        }
        
        // Exibe os resultados
        echo "<h2>O aluno $nome obteve média $media e está $status.</h2>";
    } else {
        echo "<h2>Por favor, preencha todos os campos corretamente.</h2>";
    }
} else {
    echo "<h2>Por favor, preencha o formulário.</h2>";
}
?>
 <!-- Botão de Voltar -->
 <button onclick="window.location.href='av.html'">Voltar</button>
    </div>
   
</body>
</html>
