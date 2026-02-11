<?php
// Verifica se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebendo e protegendo os dados
    $nome  = htmlspecialchars($_POST["nome"] ?? "");
    $media = htmlspecialchars($_POST["media"] ?? "");
    $mes   = htmlspecialchars($_POST["mes"] ?? "");
    $dia   = htmlspecialchars($_POST["dia"] ?? "");
    $hora  = htmlspecialchars($_POST["hora"] ?? "");

} else {
    // Caso alguém tente acessar direto o cadastro.php
    echo "<h2>Erro: Acesso inválido!</h2>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
</head>
<body>

    <h1>📋 Dados Recebidos</h1>

    <p><strong>Nome:</strong> <?= $nome ?></p>
    <p><strong>Média:</strong> <?= $media ?></p>
    <p><strong>Período Letivo:</strong> <?= $mes ?></p>
    <p><strong>Dia da Prova:</strong> <?= $dia ?></p>
    <p><strong>Horário da Prova:</strong> <?= $hora ?></p>

    <br>
    <a href="form003.html">⬅ Voltar ao formulário</a>

</body>
</html>
