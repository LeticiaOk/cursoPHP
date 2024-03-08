# MANEIRAS DE ABRIR E FECHAR TAGS

~~~~php
<?php ?> // super tag php

<? ?> // short open tag (Não recomendado)

<% %> // ASP tag (Não funciona mais)

<script language="php"> <script> // (Não funciona mais)

<?= ?> // short tag php (Só funciona com um comando e se for print ou echo)

<?$nome = "Gustavo Guanabara"?> // É possível omitir o ponto e vírgula

<?= "<p> O meu nome é $nome</p>"?> // É possível omitir o echo ou print e o ponto e vírgula 
~~~~

# ACESSAR CONFIGURAÇÕES php.ini
> Este Computador > Disco Local(C:) > xampp > php > php.ini

# VARIAVEIS E CONSTANTES

## Variável:

~~~~php
$sobrenome = "Guanabara";
~~~~

## Constante:

~~~php
const PAIS = "Brasil";
~~~


> * Não da para fazer interpolação com constantes.
> * Usa concatenação.
> * Não pode mudar o valor.
> * No nome da constante letra maiúscula.

## Regras:

* Variáveis sempre começam com o símbolo $
* O segundo pode ser letra ou símbolo _
* Aceita caracteres [a-z], [A-Z], [0,9] e [_]
* Aceita caracteres da tabela ASCII a partir de 128
* Aceita caracteres como á, õ, ç
* A linguagem é case sensitive em relação aos nomes
* Nomes especiais como $this não podem ser usados

## Recomendações:

* Tente dar nomes claros e de fácil identificação
* Evite nomes muito grandes ou muito curtos
* Defina um padrão de nomeação em todo o projeto
* Para variávies, de preferencia a letras minusculas
* Para constantes, dê preferencia a letras maiusculas
* Use camelCase para métodos e atributos
* Use SNAKE_CASE para nomear constantes

# TIPOS PRIMITIVOS

## Escalares:
* string (int ou integer) 
* float, (double ou real) 
> real deixou de existir a apartir da versão 7 do php
* bool ou boolean 

### Obs:
> 0x1A = int (Em PHP todo numero iniciado com 0x é um número da base representativa hexadecimal)

>3e2 = 3 x 10 ** 2 = 300 = double (todo número representado por potências é float ou double)

## Compostos:
* array
* object

## Especiais:
* null
* resource
* callabe
* mixed (versão 8.0)

# MANIPULAÇÃO DE STRING COM PHP

> 4 tipos de strings

## Double quoted (aspas duplas):
> O operador + não serve para concatenar strings.<br>
>EX: "Curso" . "PHP" -> CursoPHP

>Existe a interpretação do conteúdo da string:<br>
>EX: "PHP\u{1F418}" (interpreta a o emoji)<br>
>EX: 'PHP\u{1F418}' (Não interpreta o emoji por estar em aspas simples)<br>

> EX: $nome
> echo "Olá $nome!" -> Olá Gustavo!
> echo 'Olá $nome!' -> Olá $nome!

> EX: const ESTADO = "RJ";<br>
> echo "Moro no ESTADO" -> moro no ESTADO (por ser constante não consegue iterpretar)<br>
> echo 'Moro no ESTADO' -> moro no ESTADO<br>
>echo "Moro no" . ESTADO -> moro no RJ 

> OBS:
> Pode se colocar aspas simples dentro de asplas duplas e aspas duplas dentro de aspas simples mas não pode colocar aspas simples dentro de aspas ismples e nem asppas suplas dentro de aspas duplas

>EX:
> $nom = "Rodrigo";
> $snom = "Nogueira";

> echo "$nom"Minotauro"$snom" (ERRO: Para o PHP as aspas são abertas e fechadas em sequencia)

> echo '$nom"Minotauro"$snom' -> $nom "Minotauro" $snom (não vai interpretar por conta das aspas simples)

>echo "$nom\"Minotauro\"$snom" -> Rodrigo Minotauro Nogueira (sequencia de escape)

### Escape sequences: (para aspas simples)
~~~~php
\'
~~~~

### Escape sequences: (para aspas duplas)

~~~~php
\n // Nova linha
\t // Tabulação horizontl
\\ // Barra invertida
\$ // Sinal de cifrão
\u{} // Codepoint Unicode
~~~~

> Single quoted (aspas simples)

##### Heredoc:
> Pode-se colocar texto em múltiplas linhas (aspas duplas).

~~~~php
$curso == "PHP";
$ano =  date('Y');

echo <<< FRASE
    Estou estudando
        $curso em $ano  -> Estou estudando PHP em 2024

    FRASE;

// No HTML fica tudo na mesma linha.
~~~~

#### Nowdoc:
> Pode-se colocar texto em múltiplas linhas (aspas simples).

~~~~php
$curso == "PHP";

$ano =  date('Y');
echo <<< 'FRASE'
    Estou estudando
        $curso em $ano  -> Estou estudando $curso em $ano
~~~~

>LINK EMOJI:
>Emojipedia.org

# OBTENDO DADOS DE FORMULÁRIOS COM PHP

## method:
* metodo de envio é como os dados vão ser codifciados para poderem ser enviados para o servidor.
> Ex: get

## action:
* para onde vão ser enviados os dados.
> EX: cad.php

## name:
* nome do elemento.
> EX: sobrenome

## value:
* o valor que está dentro da caixa.
> EX: "Guanabara"

# OBTENDO FORMULÁRIOS COM PHP (PARTE 2):

## $_GET:
* Super global (funciona porque o método de envio do formulário é get e se fosse post seria $_POST) 

> Mostra: array(2) { ["nome"]=> string(7) "Leticia" ["sobrenome"]=> string(5) "Alves" }

## $_REQUEST:
* Funciona para get($_GET), post($_POST) e cookies($_COOKES)
>Ocupa mais memória

# EXPRESSÕES ARITIMÉTICAS COM PHP

## Ordem de precedência:

1. ()
2.  **
3. (* / % da esquerda para direita)
4. (+ -   da esquerda para direita)

> EX: (SEM PARÊNTESES)<br>
> 50 / 2 + 3 ** 2<br>
> 50 / 2 + 9 <br>
> 25 + 9 <br>
> 34

> EX: (COM PARÊNTESES)<br>
> 50 / (2 + 3) ** 2<br>
> 50 / 5 ** 2<br>
> 50 / 25<br>
> 2

# FUNÇÕES ARITIMÉTICAS

## abs():
* retorna o valor absoluto de um número
* Retira o sinal de uma variável 
> EX -2000 > 2000

## base_convert():
* convertor de bases
> EX > 254 > 11111110

## ceil():
* arredonda pra cima

## floor(): 
* arredonda para baixo

## round():
* arredondamento aritmético

## hypot():
* Calcula o tamanho da hipotenusa
* infromar o primeiro e o segundo cateto

## intdiv():
* divisão inteira

## min(), max()
* Valor minimo e máximo de uma sequência

## pi():
* valor de pi

## pow():
* potência
* se usar a função ao invés do operador de potência se perde a ordem de precedência

* usar paratenses para voltar a ser precedencia

## sin(), cos(), tan()
* Calcular seno, cosceno e tangente de um ângulo

## sqrt():
* raiz quadrada de um número
* Apenas raiz quadrada

# SUPER GLOBAIS DO PHP

> query string:
> é uma solicitação (URL)

> ver dados pelo método POST:
> inspecionar elemento > network > colocar dados no formulário > arquivo PHP > Payload

## super globais:

### $_POST
* Pega os dados pela URL

### $_GET
* Pega os dados pelos pacotes

### $_REQUEST
* Pega os dados pela URL e por pacotes

### $_COOKIE
* São pequenas variaveis guardadas no navgeador por um determinado periodo de tempo e tem acesso aos cookies da sua aplicação PHP

### $_FILES
* Se fizer upload de um arquivo ele consegue pegar os dados do arquivo

### $_SESSION
* Permiete que variaveis de sessão (que não são perdidadas entre as navegações de páginas) possam ser utilizadas

### $_ENV
* Variaveis de ambiente do servidor

### $GLOBALS
* Mostra os dados de todas as outras superglobais (evitar)

