<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //HEREDOC

        // $canal = "Curso em Vídeo";
        // $ano = date('Y');
        // echo <<< TESTE
        //     Olá galera do $canal
        //             Tudo bem com vocês?
        //         Como estão esse ano de $ano?
        //     Abraços! \u{1F596}
        // TESTE;

        //Olá galera do Curso em Vídeo Tudo bem com vocês? Como estão esse ano de 2024? Abraços! 🖖


        //NOWDOC

        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá galera do $canal
                    Tudo bem com vocês?
                Como estão esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;

        //Olá galera do $canal Tudo bem com vocês? Como estão esse ano de $ano? Abraços! \u{1F596}
    ?>
</body>
</html>