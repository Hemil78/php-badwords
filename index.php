<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    /* definisco una chiave valore passata all'utente */
    $parola = $_GET['parola'];
    /* variabile testo */
    $textProva = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptatum voluptas quo consequuntur corrupti accusantium, molestiae ullam repellendus. Eligendi doloribus eaque quod ducimus dolorum adipisci esse dignissimos sint minus nisi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptatum voluptas quo consequuntur corrupti accusantium, molestiae ullam repellendus. Eligendi doloribus eaque quod ducimus dolorum adipisci esse dignissimos sint minus nisi.';
    /* creiamo una variabile testo censura con la parola da censurare */
    $textCensura = str_replace($parola, '***', $textProva);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>PHP BadWords</title>
    </head>
    <body>
        <div class="box">
            <!-- stampo il testo -->
            <p><?php echo $textProva; ?></p>
            <!-- la sua lunghezza -->
            <h2>la sua lunghezza è <?php echo strlen($textProva); ?> caratteri</h2>
            <hr>
            <p> <?php echo $textCensura ?></p>
            <h2>la sua lunghezza è <?php echo strlen($textCensura); ?> caratteri</h2>
        </div>
        
    </body>
</html>