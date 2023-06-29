<?php

// Scrivere un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:
// v < 18: insufficiente
// 18 >= v < 21: sufficiente
// 21 >= v < 24: buono
// 24 >= v < 27: distinto
// 27 >= v <= 29: ottimo
// v = 30: eccellente
// Esempio:
// Input: v = 29
// Output: Ottimo

$voto = rand(0,30);
echo "Input: $voto \n";
if($voto < 18) {
    echo "Output: insufficiente";
} else if ($voto >= 18 && $voto < 21){
    echo "Output: sufficiente";
} else if ($voto >= 21 && $voto < 24){
    echo "Output: buono";
} else if ($voto >= 24 && $voto < 27){
    echo "Output: distinto";
} else if ($voto >=27 && $voto <= 29){
    echo "Output: ottimo";
} else {
    echo "Output: eccellente";
}