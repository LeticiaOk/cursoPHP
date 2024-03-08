<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        $apelido = "Gafanhoto";

        // echo "$nome '$apelido' $sobrenome"; //Gustavo 'Gafanhoto' Guanabara

        // echo "$nome "$apelido" $sobrenome"; // ERRO

        // echo "$nome \"apelido\" $sobrenome"; //Gustavo "apelido" Guanabara

        echo "$nome \n\t\"apelido\"\t\t $sobrenome"; //Não funciona dentro do html
        
    ?>
</body>
</html>