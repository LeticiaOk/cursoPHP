<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 50;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="number" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste?</label>
            <input type="number" name="percentual" id="percentual" value="<?=$percentual?>" >
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $calculo = ($percentual * $preco) / 100;
            $reajuste = $preco + $calculo;

            echo "O produto que custava ".number_format($preco,2, ',', '.').", com <strong>$percentual% de aumento</strong> vai passar custar R$".number_format($reajuste,2,',','.')." a partir de agora.";
        ?>
    </section>
</body>
</html>