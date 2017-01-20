<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {

        
        // gets the "shares" "symbol" info from database and put it to the variable rows
        $rows=CS50::query("SELECT * FROM portfolios WHERE id = ?", $_SESSION["id"] );
        
        // creat an empty array and put al of the info to there, because the portfolio.php will use them by iterating that array
        $positions = [];
        foreach ($rows as $row)
        {
            $stock = lookup($row["symbol"]);
            if ($stock !== false)
            {
                $positions[] = [
                    "name" => $stock["name"],
                    "price" => $stock["price"],
                    "shares" => $row["shares"],
                    "symbol" => $row["symbol"]
                ];
            }
        }
        
        // get the cash info of the user with that id
        $row=CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"] );
        $cash = $row[0]["cash"];
        
        // render portfolio
        render("portfolio.php", ["title" => "Portfolio", "positions" => $positions, "cash" => $cash] );
    }
    

?>
