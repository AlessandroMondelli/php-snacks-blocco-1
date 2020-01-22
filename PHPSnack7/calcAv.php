<?php
function calcAv($vot) { //Funzione che calcola media
    $length = count($vot); //numero di voti
    $add = 0; //Inizializzo somma

    foreach ($vot as $subjects => $value) { //Scorro array
        $add += $vot[$subjects]; //Sommo voti
    }

    $av = $add / $length; //Calcolo media
    return $av;
}
 ?>
