<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "Eu adoro o " . CANAL; // Eu adoro o Curso em Vídeo 💙

        //ERRADO
        echo "Estamos no ano de date('Y')";  //Estamos no ano de date('Y')

        //CERTO
        echo "Estamos no ano de" . date('Y'); //Estamos no ano de2024

        // OBS:
        //Pode se colocar aspas simples dentro de asplas duplas e aspas duplas dentro de aspas simples mas não pode colocar aspas simples dentro de aspas ismples e nem asppas suplas dentro de aspas duplas
    ?>
</body>
</html>