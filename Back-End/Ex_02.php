<?php

// Ler a data de nascimento do usuário e imprima se o mesmo é maior de 18 anos e a idade calculada.

$dataNascimento = "16/04/2001";
$hoje = date("d/m/Y");

$idade = 17;

if ($idade<18)
    echo "O usuário é menor de idade e possui $idade anos";
else 
    echo "O usuário é maior de idade e possui $idade anos"
    
?>