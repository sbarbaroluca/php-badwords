<?php
    $testo = "Datemi i giovani, gli affamati e gli stupidi e in meno che non si dica li faccio diventare ricchi.";

    $parola = $_GET["parola"];

    $testoFiltro = str_replace($parola, "***", $testo);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style/index.css">
   <title>Badwords php</title>
 </head>
 <body>
    <h1>Badwords</h1>
    <p><?php echo $testoFiltro?></p>
    <h3>Lunghezza testo: <?php echo strlen($testoFiltro)?> caratteri</h3>
    <h4>La parola è <?php echo $parola?></h4>
 </body>
 </html>