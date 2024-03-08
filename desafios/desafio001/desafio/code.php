<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>

        <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>O número escolhido foi <strong>$numero</strong></p>";

            echo "<p>O seu antecessor é $antecessor</p>";

            echo "<p>O seu sucessor é $sucessor</p>"
        ?>

        <a href="index.html"><button>&#8592; Voltar</button></a>
    </section>
</body>
</html>