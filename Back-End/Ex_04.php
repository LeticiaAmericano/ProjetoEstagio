<?php

// Criar um array com 20 números inteiros. 
// Você deverá imprimir o maior e o menor número desse array.
// Além de calcular e exibir o percentual de números pares e ímpares, e por fim, o valor médio dos números desse array.

$numeros = Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$menor = $numeros[0];
$maior = $numeros[0];
$medio = 0;
$npares = 0;
$nimpares = 0;

for($i=0; $i<20; $i++)
{
    if($menor > $numeros[$i])
    {
        $menor = $numeros[$i];
    }
    if($maior < $numeros[$i])
    {
        $maior = $numeros[$i];
    }

    $medio += $numeros[$i];

    if($numeros[$i] % 2 == 0)
    {
        $npares++;
    }
    else
    {
        $nimpares++;
    }
}

$medio = $medio / count($numeros);
$npares = ($npares / count($numeros))*100;
$nimpares = ($nimpares / count($numeros))*100;

echo "O menor numero do array é $menor \n";
echo "O maior numero do array é $maior \n";
echo "O valor medio do array é $medio \n";
echo "A porcentagem de numeros pares é $npares % \n";
echo "A porcentagem de numeros impares é $nimpares % \n";