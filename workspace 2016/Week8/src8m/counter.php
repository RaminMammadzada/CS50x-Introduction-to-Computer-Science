<?php

    // enable sessions
    session_start();

    // check counter
    if (isset($_SESSION["counter"]))
    {
        $counter = $_SESSION["counter"];
    }
    else
    {
        $counter = 0;
    }

    // increment counter
    $_SESSION["counter"] = $counter + 1;

?>

<!DOCTYPE html>

<html>
    <head>
        <title>counter</title>
    </head>
    <body>
        You have visited this site <?= $counter ?> time(s). 
    </body>
</html>
