<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
<?php
	$nome = "Gustavo";
	$sobrenome = "Guanabara";
    const PAÍS = "Brasil";
    //
    $nome = "Rafael"; // Mudou o valor da variável
    $sobrenome = "Silva"; // Mudou o valor da variável
    // PAÍS = "EUA"; // Não pode mudar o valor da constante
    //
    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAÍS;
    
?>
</body>
</html>