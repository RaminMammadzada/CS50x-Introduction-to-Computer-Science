<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("buy_form.php", ["title" => "Buy"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $all_info1=CS50::query("SELECT * FROM users WHERE id = ? ", $_SESSION["id"]);
        $cash=$all_info1[0]["cash"];

        // look up of the stock with the symbol filled in the form
        $stock = lookup($_POST["symbol"]);
        //$stock["price"];
        
        if ($stock==false)
        {   
            apologize("There is no symbol like that !");
        }
        else if ($_POST["share"]*$stock["price"] < $cash)
        {
            $symbol=CS50::query("SELECT symbol FROM portfolios WHERE id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
            
            if ($symbol==true)
            {
                // update the share in the database
                CS50::query("UPDATE portfolios SET shares=shares + ? WHERE id = ? AND symbol = ?", $_POST["share"], $_SESSION["id"], $_POST["symbol"]);
            }
            else
            {
                // insert the share to the database
                CS50::query("INSERT INTO portfolios (id, user_id, symbol, shares) VALUES(?,?,?,?) ", $_SESSION["id"], $_SESSION["id"], $_POST["symbol"], $_POST["share"]);
            }
            
             // Update the cash info of the user with that id
            CS50::query("UPDATE users SET cash=cash- ? WHERE id = ? ", $_POST["share"]*$stock["price"], $_SESSION["id"]);
            
            // get date and time info
            $date=date("Y-m-d H:i:s");
            // add this to history, OPERATION: 1-buy, 0-sell
            CS50::query("INSERT INTO history (id, symbol, name, share, price, total, operation, date) VALUES(?,?,?,?,?,?,?,?) ", $_SESSION["id"], $_POST["symbol"], $stock["name"], $_POST["share"], $stock["price"], $_POST["share"]*$stock["price"], 'buy', $date);
            
            // redirect to portfolio                    
            redirect("/");
            
        }
        else
        {
            $var = round($cash / $stock["price"]);
            apologize("You don't have that amount ! The maxsimum share you can buy from {$stock["name"]}is {$var}");
        }
    
    }



?>


