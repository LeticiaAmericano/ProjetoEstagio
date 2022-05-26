<?php

// Ler um número e imprimir a tabuada do mesmo.

$numero = 3;

for($i = 0; $i<11; $i++)
{
    $resultado = $i*$numero;
    echo "$i x $numero = $resultado \n";
}
    
?>