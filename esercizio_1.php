<?php

//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. 

$users = [
 [
    'name' => 'Davide', 
    'surname' => 'Cariola', 
    'gender' => 'NB'
 ],
 [
    'name' => 'Claudio', 
    'surname' => 'Paradisi', 
    'gender' => 'Male'
 ],
 [
    'name' => 'Margot', 
    'surname' => 'Robbie', 
    'gender' => 'Female'
 ],
 [
    'name' => 'Maccio', 
    'surname' => 'Capatonda', 
    'gender' => 'Male'
 ],
 [
    'name' => 'Nico', 
    'surname' => 'Robin', 
    'gender' => 'Female'
 ],
];

foreach($users as $user){
    if($user["gender"] == "Male"){
        var_dump("Buongiorno Sig. $user[name] $user[surname]");
    } else if($user["gender"] == "Female") {
        var_dump("Buongiorno Sig.ra $user[name] $user[surname]");
    } else {
        var_dump("Buongiorno $user[name] $user[surname]");
    }
}
