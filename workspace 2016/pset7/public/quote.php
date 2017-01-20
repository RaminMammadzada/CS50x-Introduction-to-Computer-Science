<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "Quote"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $stock = lookup($_POST["symbol"]);
        
        render("quote_show.php", ["prices" => $stock["price"], "names" => $stock["name"], "symbols" => $stock["symbol"]]);
        // report price
        //print("1 share of {$stock["name"]} costs {$stock["price"]}.\n");
    }

?>
