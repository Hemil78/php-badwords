<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

    $textProva = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptatum voluptas quo consequuntur corrupti accusantium, molestiae ullam repellendus. Eligendi doloribus eaque quod ducimus dolorum adipisci esse dignissimos sint minus nisi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste voluptatum voluptas quo consequuntur corrupti accusantium, molestiae ullam repellendus. Eligendi doloribus eaque quod ducimus dolorum adipisci esse dignissimos sint minus nisi.';

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
            <p><?php echo $textProva; ?></p>
            <h2>la sua lunghezza è <?php echo strlen($textProva); ?> caratteri</h2>
            <hr>
            <p> <?php echo str_replace( 'dolor', '***', $textProva ) ?></p>
        </div>
        
    </body>
</html>