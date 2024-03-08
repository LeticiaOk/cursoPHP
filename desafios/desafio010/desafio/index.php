<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nasc = $_GET['nasc'] ?? 2000;
        $ano = $_GET['ano'] ?? date('Y');
        $ano_atual = date('Y');
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>" max="<?=$ano_atual?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>" min="<?=$nasc?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
            echo "Quem em $nasc vai ter <strong>$idade anos</strong> em $ano!"
        ?>
    </section>
    
</body>
</html>