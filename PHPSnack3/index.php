<!-- Creare un array di array: ogni array figlio avrà come chiave una data in questo
formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
associati a quella data.
Stampare ogni data con i relativi post. -->
<?php
    //Richiamo file con array
    @include 'dataPosts.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 3</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>PHP Snack 3</h1>
        </header>
        <main>
            <div class="container">
                <?php
                //Scorro array per date
                foreach ($posts as $data => $info) {
                    // var_dump($data);
                    // var_dump($info);
                ?>
                <h2><?php echo $data ?></h2>
                <?php
                    //Scorro array per info e stampo
                    foreach ($info as $dati) {
                ?>
                    <div class="post">
                        <p class="title"><?php echo $dati["title"] ?></p>
                        <p class="author"><?php echo $dati["author"] ?></p>
                        <p><?php echo $dati["text"] ?></p>
                    </div>
                <?php
                    }
                ?>
                <?php
                }
                ?>

            </div>
        </main>
    </body>
</html>
