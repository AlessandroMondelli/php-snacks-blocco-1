<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    //Richiamo file che contiene l'array
    @include 'students.php';
    //Richiamo file che contiene funzione per calcolare media
    @include 'calcAv.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 7</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>PHP Snack 7</h1>
        </header>
        <main>
            <div class="container">
                <?php
                foreach ($students as $info => $value) { //For per leggere tutti i dati
                    $aver = calcAv($value['votes']); //Richiamo funzione per calcolare media
                ?>
                <div class="student">
                    <h2>Nome</h2>
                    <span><?php echo $value['name'] ?></span>
                    <h2>Cognome</h2>
                    <span><?php echo $value['lastname'] ?></span>
                    <h2>Media voti</h2>
                    <span><?php echo $aver ?></span>
                </div>
                <?php
                }
                ?>
            </div>
        </main>
    </body>
</html>
