<?php
//In caso di utilizzo del form
// $name = $_GET["name"];
// $email = $_GET["mail"];
// $age = $_GET["age"];

function verAcc($nome,$email_fun,$eta) { //Funzione che verifica accesso
    $flag = 0; //Flag che verifica presenza di errori

    if (strlen($nome) <= 3) { //Verifico se la lunghezza del nome è inferiore a 3 caratteri
        $flag = 1;
        $ver = "<span>Il nome è troppo corto.</span>";
    }

    if ((strpos($email_fun,".") === false) || ((strpos($email_fun,"@") === false))) { //Verifico la presenza di un '.' e di una '@' nell'email
        $flag = 1;
        $ver .= "<span>L'email non è valida.</span>";
    }

    if (!is_numeric($eta)) { //Verifico che l'età sia un numero
        $flag = 1;
        $ver .= "<span>L'età non è un numero.</span>";
    }

    if ($flag == 0) { //Se non ci sono stati errori..
        $ver = "Accesso riuscito"; //Ritorno la stringa di accesso riuscito
        return $ver;
    } else {
        return $ver; //Altrimenti ritorna la stringa che si è creata negli if degli errori
    }
}
?>
