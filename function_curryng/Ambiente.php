<?php

function parciaIntDiv(int $segundoNumero): callable 
{
    return fn($primeiroNumero) => intdiv($primeiroNumero, $segundoNumero);
}

$dividePor2 = parciaIntDiv(2);
$dividePor4 = parciaIntDiv(4);

echo $dividePor2(4) . PHP_EOL;
echo $dividePor2(16) . PHP_EOL;

echo $dividePor4(4) . PHP_EOL;
echo $dividePor4(16) . PHP_EOL;