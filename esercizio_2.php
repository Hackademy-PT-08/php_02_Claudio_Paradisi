<?php

//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


$numbers = [5,8,12,81,6,9,4,7];

foreach($numbers as $number){
    if($number % 2 == 0){
       //creo array di numeri pari
       $numberPari[] = $number;
       //scopro quanti numeri pari ho per poi fare la media
       var_dump($numberPari);
       //sommo i numeri dentro l'array
        $sum = array_sum($numberPari);
        //controllo che sia andato a buon fine
        var_dump($sum);
        //faccio la media
        $media = $sum / 4;
        var_dump( "la media dei numeri pari è $media");

        
    }
}