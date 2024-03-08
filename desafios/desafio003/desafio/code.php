<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $real = str_replace(',', '.', $_GET["real"]);
            $dolar = 4.93;
            $conversao = $real / $dolar;
            $conversao_formatada = number_format($conversao,2);

            echo "<p>Seu R$ $real equivalem a U$ <strong>$conversao_formatada </strong></p>";

            echo "<p><small><strong>*Cotação fixa de R$ $dolar</strong> informada dieretamente no código.</small></p>"
        ?>
    </section>
    
    
</body>
</html>