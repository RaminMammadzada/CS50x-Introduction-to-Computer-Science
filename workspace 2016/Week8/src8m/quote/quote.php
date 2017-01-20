<?php

    require("functions.php");
    
    // ensure proper usage
    if ($argc != 2)
    {
        print("Usage: php quote.php symbol\n");
        exit(1);
    }
    
    // look up stock
    $stock = lookup($argv[1]);
    
    // report price
    print("1 share of {$stock["name"]} costs {$stock["price"]}.\n");

?>