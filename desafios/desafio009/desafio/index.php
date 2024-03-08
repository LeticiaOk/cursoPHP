<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Artiméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <main> 
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="peso2">2ºPeso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Méidas">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valores $valor1 e $valor2:";
            $ms = ($valor1 + $valor2) / 2;
            $mp = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            $ms_format = number_format($ms, 2, ',', '.');
            $mp_format = number_format($mp, 2, ',', '.');

        ?>

        <ul>
            <li>
                A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$ms_format?>
            </li>
            <li>
                A <strong>Média Aritmética Ponderada</strong> com os pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$mp_format?>
            </li>
        </ul>
    </section>
</body>
</html>