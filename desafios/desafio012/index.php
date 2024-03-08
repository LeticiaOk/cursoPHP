<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHPt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        /*
            1 min - 60seg
            1 hora - 60min x 60 = 3.600seg
            1 dia - 24h x 60 = 1.400min x 60 = 86.400seg
            1 semana - 7dias x 24 = 168h x 60 = 10.080min x 60 = 604.800seg

            SEMANAS
            2.000.000 seg / 604.800 
            resp = 3 (semanas)
            resto = 185.600

            DIAS
            185.600 / 86.400seg
            resp = 2 (2 dias)
            resto = 12.800

            HORAS 
            12.800/ 3.600seg
            resp = 3 (3 horas)
            resto = 2.000

            MIN/SEG
            2.000 / 60
            resp = 33 (minutos)
            resto = 20 (segundos)
        */
        $total = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $total;
        //Total de semanas
        $semana = (int)($sobra/604_800);
        $sobra = $sobra % 604_800;
        // Total de Dias
        $dia = (int)($sobra/86_800);
        $sobra = $sobra % 86_400;
        //Total de Horas
        $hora = (int)($sobra/3_600);
        $sobra = $sobra % 3_600;
        //Total de minutos
        $minuto = (int)($sobra/60);
        $sobra = $sobra % 60;
        //Total segundos
        $segundo = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total,0,',','.')?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>