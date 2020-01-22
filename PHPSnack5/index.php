<!-- Creare un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il
paragrafo e suddividerlo in tanti paragrafi: ogni volta che si incontra un punto,
bisogna creare un nuovo paragrafo. -->

<?php
    //Richiamo file funzione per dividere paragrafi
    @include 'divParagraph.php';
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 5</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>PHP Snack 5</h1>
        </header>
        <main>
            <div class="container">
                <h2>Il testo andrà a capo ad ogni punto!</h2>
                <?php
                $new_text = divPar($text); //Richiamo funzione per dividere testo
                $text_p_length = count($new_text); //Lunghezza array

                for ($i = 0; $i < $text_p_length; $i++) {
                    ?>
                    <p><?php echo $new_text[$i] ?></p>
                <?php
                }
                ?>
            </div>
        </main>
    </body>
</html>
