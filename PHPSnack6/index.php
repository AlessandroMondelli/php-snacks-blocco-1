<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde. -->

<?php
    //Richiamo file che contiene l'array
    @include 'teachArray.php';
    //Richiamo file con funzione che scorre array
    @include 'divideTeach.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 6</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>PHP Snack 6</h1>
        </header>
        <main>
            <div class="container">
                <div id="teachers" class="school">
                    <h2>Teachers</h2>
                    <?php
                    $teachers = divideEl(0,$db);
                    foreach ($teachers as $key => $value) {
                    ?>
                    <p>
                        <span><?php echo $value["name"] ?></span>
                        <span><?php echo $value["lastname"] ?></span>
                    </p>
                    <?php
                    }
                     ?>
                </div>
                <div id="pm" class="school">
                    <h2>PM</h2>
                    <?php
                    $teachers = divideEl(1,$db);
                    foreach ($teachers as $key => $value) {
                    ?>
                    <p>
                        <span><?php echo $value["name"] ?></span>
                        <span><?php echo $value["lastname"] ?></span>
                    </p>
                    <?php
                    }
                     ?>
                </div>
            </div>
        </main>
    </body>
</html>
