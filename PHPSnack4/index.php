<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
    //Richiamo file funzione per generare numeri
    @include 'genNumbers.php';
    $n_num = 15; //Numero di numeri richiesti
    $val_min = 0; //Valore minimo rand
    $val_max = 100; //Valore massimo rand
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 4</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>PHP Snack 4</h1>
        </header>
        <main>
            <div class="container">
                <h2><?php echo $n_num ?> numeri casuali creati</h2>
                <?php
                $numbers = genNum($n_num,$val_min,$val_max); //richiamo funzione per creare array numeri casuali
                ?>
                <p>
                <?php
                for ($i = 0; $i < $n_num; $i++) { //Ciclo per stampare numeri
                ?>
                    <span><?php echo $numbers[$i] ?></span>
                <?php
                }
                ?>
                </p>
            </div>
        </main>
    </body>
</html>
