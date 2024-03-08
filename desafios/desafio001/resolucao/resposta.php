<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 
                0;
                $a = $n -1;
                $s = $n + 1;

                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br> O seu antecessor é <em>$a</em>";
                echo "<br> O seu sucessor é <em>$s</em>";
            ?>
        </p>
        <!--Voltando pelo link da página-->
        <!--A caixa perde o valor digitado anteriormente-->
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->

        <!--Voltando pelo histórico-->
        <!--A caixa vem com o número digitado anteriormente-->
        <button onclick="javascript:history.go(-1)-1">&#x2B05; Voltar</button>
    </main>
</body>
</html>