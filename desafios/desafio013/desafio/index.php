<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="$valor">Qual valor você deseja sacar?(R$)</label>
            <input type="number" name="valor" id="valor" step="5" min="0" value="<?=$valor?>">
            <p><small>* Notas disponíveis $100, $50, R$10 e $5</small></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $total = $valor;
        //Notas de 100
        $n100 = intdiv($total, 100);
        $total = $total % 100;
        //Notas de 50
        $n50 = intdiv($total, 50);
        $total = $total % 50;
        //Notas de 10
        $n10 = intdiv($total, 10);
        $total = $total % 10;
        //Notas 5
        $n5 = intdiv($total, 5);
        $total = $total % 5;
    ?>
    <section>
        <h2>Saque de R$ <?=number_format($valor, 2, ',', '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas</p>
        <ul>
            <li>[100] x<?=$n100?></li>
            <li>[50] x<?=$n50?></li>
            <li>[10] x<?=$n10?></li>
            <li>[5] x<?=$n5?></li>
        </ul>
        <img src="" alt="">
    </section>
</body>
</html>