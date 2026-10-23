<?php


// desafio 1

echo "------ MEU PERFIL ------\n";

$nome = "Nome: wagner";
$idade = "Idade: 59";
$cidade = "dagestão";
$curso = "curso: sistemas de farmar aura";

echo "$nome \n";
echo "$idade \n";
echo "$cidade \n";
echo "$curso \n";

echo "------------------------ \n";

// desafio 2

const NOME_DA_LOJA = "wagner lojas";

const TIPO_DE_PRODUTO1 = "periferico";
const TIPO_DE_PRODUTO2 = "plantas";

const PRODUTO1 = "mouse";
const PRODUTO2 = "babosa";

$valor_produto_1 = "100";
$valor_produto_2 = "40";

$estoque_produto_1 = "05";
$estoque_produto_1 = "15";

echo NOME_DA_LOJA . " | " . TIPO_DE_PRODUTO1 . " |  R$ " . $valor_produto_1 . " | Estoque: " . $estoque_produto_1 . "\n"; 

// desafio 3

const DESCONTO = "10";

$preco = 80;

$quantidade = 2;

$subtotal = $preco * $quantidade;


$total = DESCONTO - $subtotal;

echo "preço: R$ " . $preco . "\n";
echo "quantidade: " . $quantidade . "\n";
echo "subtotal: " . $subtotal . "\n";
echo "desconto: " . DESCONTO . "\n";
echo "total: " . $total . "\n";


if ($total > 100){
    echo "a compra é grandona\n";
}
else {
    echo "mutcho beta\n";
}


// desafio 4

$string = "25";
$int = 25;
$float = 25.5;

var_dump($string);
var_dump($int);
var_dump($float);

$string = (int) $string;

if ($string === $int){
    echo "é a mesma coisa xd";
}
else{
    echo "o bagui é mentira KK";
}

// desafio 5

$nome = readline("digite seu nome: \n");
$idade = readline("digite sua idade: \n");
$linguagem = readline("qual sua linguagem favorita? \n");

echo "ola, " . $nome . "! você tem " . $idade . " anos. \n";
echo "e gosta de programar em " . $linguagem . "\n";

// desafio 6

const NOTA_MINIMA = 0;
const NOTA_MAXIMA = 10;

$nota = readline("digite sua nota de 0 a 10 ");
$frequencia = readline("digite a frequencia em % ");

if ($nota >= 7 && $frequencia <= 10){
    echo "aprovado\n";
}
elseif ($nota >= 5 && $nota <= 6){
    echo "recuperação\n";
}
elseif ($nota >= 0 && $nota <= 4){
    echo "reprovado\n";
}
else {
    echo "existe não\n";
}

// desafio 7



?>

