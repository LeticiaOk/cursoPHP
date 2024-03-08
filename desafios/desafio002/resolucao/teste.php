<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php 

        # FUNÇÃO RAND()
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        // rand() = 1951 - Linear Congretial Gererator
        // Não é tão confiável hoje em dia
        //Lenta

        //mt_rand() = 1197 - Mersenne Twiester
        // 4x mais rápido
        // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()

        //random_int() gera númros aleatórios criptograficamente seguros
        //se precisar que este número seja seguro para senhas por exemplo
        //É o mais lento de todos

        echo "Gerando um número aleatório entre $min e $max... \n";
        echo "O número gerado foi $num";
    ?>
</body>
</html>