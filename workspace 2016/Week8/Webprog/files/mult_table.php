<?php

    $n = $_POST["number"];

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Multiplication table</title>
        <style>
            td
            {
                width: 30px;
                text-align: center;
                background-color: yellow;
            }
        </style>
    </head>
    <body>
        <table>
        
        <?php
            for($i = 1; $i <= $n; $i++)
            {
                print("<tr>");
                for($j = 1; $j <= $n; $j++)
                {
                    print("<td>" . $i * $j . "</td>");
                }
                print("</tr>");
            }
        ?>
    
        </table>
    </body>
</html>