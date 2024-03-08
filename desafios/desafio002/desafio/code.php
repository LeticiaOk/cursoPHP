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
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número entre 0 e 100</p>
        <?php 
            $numero = rand(0,100);
            echo "<p>O valor gerado foi $numero</p>"
        ?>
        <button type="reset">Gerar outro</button>

    </section>
</body>
</html>