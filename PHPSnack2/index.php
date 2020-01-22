<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
    $name = $_GET["name"];
    $email = $_GET["mail"];
    $age = $_GET["age"];

    @include 'verAccesso.php';
    $verifica = verAcc($name,$email,$age);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 2</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>PHP Snack 2</h1>
        </header>
        <main>
            <div class="container">
                <p><?php echo $verifica ?></p>
                <!-- Possibile eseguire esercizio con Form -->
                <!-- <form action="verAccesso.php" method="GET">
                    <input type="text" name="name" value="" placeholder="Inserisci nome">
                    <input type="email" name="mail" value="" placeholder="Inserisci email">
                    <input type="number" name="age" value="" min="10" max="100" placeholder="Età">
                    <input type="submit" name="send" value="Invia">
                </form> -->
            </div>
        </main>
    </body>
</html>
