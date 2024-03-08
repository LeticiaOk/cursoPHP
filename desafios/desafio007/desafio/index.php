<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <input type="submit" value="Calcular">
        </form> 
    </main>
    <?php 
        $minimo = 1380.00;
        $divisao = intdiv($salario, $minimo);
        $resto = $salario - ($divisao * $minimo);
    ?>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Quem recebe um salário de R$".number_format($salario, 2, ',', '.')." ganha $divisao salários minimos + R$".number_format($resto, 2, ',', '.');
        ?>
    </section>
</body>
</html>