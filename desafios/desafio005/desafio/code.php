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
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = str_replace(',', '.', $_GET["numero"]);
            echo "<p>Analisando o número $numero informado pelo usuário</p>";
            $numero_int = floor($numero);
            $numero_frac = $numero - $numero_int; 
            echo <<< LISTA
                <ul>
                    <li>A parte inteira do númro é $numero_int</li>
                    <li>A parte fracionária do número é $numero_frac</li>
                </ul>
            LISTA;
        ?>
    </section>

</body>
</html>