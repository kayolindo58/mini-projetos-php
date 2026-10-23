<?php


(int) readline("qual seu primeiro numero? \n");
(int) readline("qual seu segundo numero? \n");

function wagner(int $n1, int $n2, int $clock)
{
    switch ($clock) {
        case 'soma':
            echo "sua soma: " . $n1 + $n2 . "\n";

        case 'subtrair':
            echo "sua subtração é: " . $n1 - $n2 . "\n";

        case 'multiplicar':
            echo "sua multiplicação: " . $n1 * $n2 . "\n";

        case 'dividir':
            echo "sua divisão é: " . $n1 / $n2 . "\n";

        default:
            echo "perdeu aura";
    }
}


echo "==================== \n";
echo "        menu          \n";
echo "==================== \n";

echo "1. somar \n";
echo "2. subtrair \n";
echo "3. multiplicação \n";
echo "4. divisão \n";

(string) readline("digite o que deseja fazer: soma, subtrair, multiplicação, dividir");
