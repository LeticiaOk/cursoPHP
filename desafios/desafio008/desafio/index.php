<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "Analisando o número <strong>$numero</strong>, temos:";

            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = $numero ** (1/3);
            echo 
                "<ul>
                <li>A sua raiz quadrada é <strong>".number_format($raiz_quadrada, 3, ',', '.')."</strong></li>".
                "<li>A sua raiz cúbica é <strong>".number_format($raiz_cubica, '3', ',', '.')."</strong></li>
                </ul>";
            
        ?>
    </section>
</body>
</html>