<?php
    date_default_timezone_set('Europe/Istanbul');;
    $time=date('H:i:s', time());
    
?>

<html>
    <head>
        <title> Current Time in Istanul</title>
    </head>
    
    <body>
        The current time in Istanbul is <?= $time ?>
    </body>

</html>