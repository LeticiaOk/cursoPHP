<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php 
        // Cotação copiada do Google
        $cotação = 5.17;
        
        // Quantos $$ você tem?
        $real = 1000;

        // Equivalência em dólar
        $dólar = $real / $cotação;

        # Jeito 1
        // Mostrar o resultado
        // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equeivalem a U\$" .number_format($dólar, 2, ",", ".")
        // Formata a variavel:
        // 2 casas decimais
        // , no lugar do separador decimal
        // . no lugar do separador de milhar
        
        # Jeito 2
        // Formatação de moedas com internacionalização
        // Biblioteca (Internallization PHP)
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Internacionaliza o código de acordo com o idioma
        echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão,$dólar,"USD");
    ?>
    
</body>
</html>