<?php

// Ler a data de nascimento do usuário e imprima se o mesmo é maior de 18 anos e a idade calculada.

$dataNascimento = "16/04/2001";
$hoje = date("d/m/Y");

$dataNascimento = explode("/", $dataNascimento);
$hoje = explode("/", $hoje);

$idade = $hoje[2] - $dataNascimento[2];

if(($hoje[1] < $dataNascimento[1]) || ($hoje[1] <= $dataNascimento[1] && $hoje[0] < $dataNascimento[0]))
{
    $idade--;
}

if ($idade<18)
    echo "O usuário é menor de idade e possui $idade anos";
else 
    echo "O usuário é maior de idade e possui $idade anos";
    
?>