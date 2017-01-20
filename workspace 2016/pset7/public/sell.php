<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("sell_form.php", ["title" => "Sell"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        // check the number of remaining shares
        $shares=CS50::query("SELECT shares FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        
        
        // get the name of stock
        $stock = lookup($_POST["symbol"]);
        
        if(count($shares)==0)
        {
            apologize("You don't have {$stock["name"]} ({$_POST["symbol"]}) share! ");
        }
        $shares=$shares[0]["shares"];
        
        // count($shares) == 1
        if ($_POST["share"] <= $shares)
        {
            // update the number of shares in the portfolio of that user
            CS50::query("UPDATE portfolios SET shares=shares- ? WHERE user_id = ? and symbol = ?", $_POST["share"], $_SESSION["id"], $_POST["symbol"]);
            
            // check the number of shares
            $shares=CS50::query("SELECT shares FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
            $shares=$shares[0]["shares"];
            
            // delete it from the portfolio if the share of that symbol becomes zero
            CS50::query("DELETE FROM portfolios WHERE user_id = ? and symbol = ? and shares= ?", $_SESSION["id"], $_POST["symbol"], 0);
            
            // this will be important to send the name of stock to the sell_show.php file
            $stock = lookup($_POST["symbol"]);
            
            // Update the cash info of the user with that id
            CS50::query("UPDATE users SET cash=cash+ ? WHERE id = ? ", $_POST["share"]*$stock["price"], $_SESSION["id"]);
            
            // get the cash info of the user with that id
            $row=CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"] );
            $cash = $row[0]["cash"];
            
            
            // get date and time info
            $date=date("Y-m-d H:i:s");
            // add this to history, OPERATION: 1-buy, 0-sell
            CS50::query("INSERT INTO history (id, symbol, name, share, price, total, operation, date) VALUES(?,?,?,?,?,?,?,?) ", $_SESSION["id"], $_POST["symbol"], $stock["name"], $_POST["share"], $stock["price"], $_POST["share"]*$stock["price"], 'sell', $date);

            
            // render the sell_show.php file
            // render("sell_show.php", ["shares" => $_POST["share"], "symbols" => $_POST["symbol"], "names" => $stock["name"], "cashes" => $cash]);
            
            // redirect to portfolio
            redirect("/");
            
            
        
        }
        else
        {
            apologize("You exceeded the amount of share you have ! The max share you can sell is {$shares}");
        }
    
    }



?>


