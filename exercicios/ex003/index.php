<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //$num = 0b1011; // Mostra 11 no navegador pois está em binário

        //0x = hexadecimal | 0b = binário | 0 = octal
        //$num = 010; // Mostra 8 no navegador pois está em octal

        // echo "O valor da variável é $num";


        // $v = "Gustavo";
        // var_dump($v); //Mostra o tipo primitivo e o valor no navegador

        // $num = (integer) 3e2; //3 x 10(2) //converte para integer (coerção)

        // echo "O valor é $num" //mostra 300 no navgeador
        // var_dump($num)

        // $num = (double) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado)
        // print "O valor para casado é $casado" //Não mostra o valor da variável no navegador quando for false já que false é vazio em php e se for true mostra 1

        // $vet = [6,2.5,"Maria",3,false];
        // echo "O vetor é $vet" // não funciona pois não existe conversão de array para string
        // var_dump($vet); // funciona

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>