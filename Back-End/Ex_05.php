<?php

//Ler o valor de um boleto bancário, data de vencimento e o valor percentual de juros diário por atraso. 
//Imprima qual o novo valor que o usuário deverá pagar do boleto caso pague na data de hoje.

$boleto = 1200;
$vencimento = "10/02/2022";
$juros = 5;
$hoje = date("d/m/Y");

$vencimento = explode("/", $vencimento);
$hoje = explode("/", $hoje);

$atraso = 0;

if($vencimento[2]>$hoje[2])
    $atraso = ($hoje[2] - $vencimento[2])*365 + $atraso;
if($hoje[1]>$vencimento[1])
    $atraso = ($hoje[1] - $vencimento[1])*30 + $atraso;
else if($hoje[1]<$vencimento[1])
    $atraso = ($hoje[1] + 12 - $vencimento[1])*30 + $atraso;
if($hoje[0]>$vencimento[0])
    $atraso = $hoje[0] - $vencimento[0] + $atraso;
else if($hoje[0]<$vencimento[0])
    $atraso = $hoje[0] + 30 - $vencimento[0] + $atraso;

$valorAtual = $atraso * ($juros/100) + $boleto;

echo "O valor atual do boleto é $valorAtual";

?>