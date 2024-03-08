<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $nome = 'Gustavo';
        // $sobrenome = 'Guanabara';

        // echo "$nome $sobrenome \u{1F596}"; //Gustavo Guanabara 🖖

        // echo '$nome $sobrenome \u{1F596}'; //$nome $sobrenome \u{1F596}
//----------------------------------------------------
        // $nome = 'Gustavo';
        // $sobrenome = 'Guanabara \u{1F596}';

        // echo "$nome $sobrenome"; //Gustavo Guanabara \u{1F596}
//----------------------------------------------------
        $nome = 'Gustavo';
        $sobrenome = "Guanabara \u{1F596}";

        echo "$nome $sobrenome"; //Gustavo Guanabara 🖖

    ?>
</body>
</html>