<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?
        date_default_timezone_set("America/Sao_Paulo"); //Timezone: GMT-3.
        echo "Hoje é dia " . date("d/M/Y"); //d minúsculo é o dia numérico e D maíusculo é o dia da semana.
        echo " e a hora atual é " . date("G:i:s T"); // O horário padrão é o do servidor, (Timezone CET).
    ?>
</body>
</html>