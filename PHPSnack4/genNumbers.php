<?php
function genNum($n_number,$min,$max) {
    $numbers_array = []; //creo array che conterrà numeri
    $i = 0; //Contatore per ciclo do while

    do { //Ciclo do while fichè l'array non raggiunge il numero desiderato di elementi
        $number = rand($min, $max); //Creo numero random
        if (!in_array($number,$numbers_array)) { //Verifico se il numero è all'interno dell'array o meno
            $numbers_array[] = $number; //Lo aggiungo all'array se non è presente
            $i++; //Incremento contatore
        }
    } while($i < $n_number);

    return $numbers_array; //Ritorno array con numeri
}
?>
