<?php
//In caso di utilizzo del form
// $name = $_GET["name"];
// $email = $_GET["mail"];
// $age = $_GET["age"];

function verAcc($nome,$email_fun,$eta) {
    $flag = 0;

    if (strlen($nome) <= 3) {
        $flag = 1;
        $ver = "<span>Il nome è troppo corto.</span>";
    }

    if ((strpos($email_fun,".") === false) || ((strpos($email_fun,"@") === false))) {
        $flag = 1;
        $ver .= "<span>L'email non è valida.</span>";
    }

    if (!is_numeric($eta)) {
        $flag = 1;
        $ver .= "<span>L'età non è un numero.</span>";
    }

    if ($flag == 0) {
        $ver = "Accesso riuscito";
        return $ver;
    } else {
        return $ver;
    }
}
?>
