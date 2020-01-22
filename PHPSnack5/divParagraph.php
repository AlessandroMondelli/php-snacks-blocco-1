<?php
function divPar($ex_text) { //Funzione per dividere stringa dopo il punto
    $text_explo = explode(". ",$ex_text); //Divido stringa dopo un punto e uno spazio
    $length_arr = count($text_explo); //Leggo lunghezza array che ha creato explode

    for ($i = 0; $i < $length_arr; $i++) { //Ciclo per aggiungere il punto alla fine della frase di ogni elemento dell'array
        if ($i != ($length_arr - 1)) { //Se non è l'ultimo elemento-1
            $text_explo[$i] .= "."; //Aggiungi un punto
        }
    }

    return $text_explo;
}
?>
