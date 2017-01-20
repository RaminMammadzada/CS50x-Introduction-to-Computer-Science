<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You should enter valid username! ");
        }
        else if (empty($_POST["password"]) or empty($_POST["confirmation"]))
        {
            apologize("You must provide your password! ");
        }
        else if ($_POST["password"]!=$_POST["confirmation"])
        {
            apologize("Your passwords don't matchs!");
        }
        
        // gets all of the data of that username involved if it does really exist in the database
        $rows = CS50::query("SELECT * FROM users WHERE username = ?", $_POST["username"]);
        
        // checks if there any username in the database same as the user gave
        if(count($rows)==0)
        {
            // if the database doesn't have a username that the user inputed, then it insert it to the database
            CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        }
        else
        {
            // gives message if the database has already have the username in it
            apologize("The username is in use! Please chose another username!");            
        }

        // gets the "id" of lastly inserted username
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        // remember that user's now logged in by storing user's ID in session
        $_SESSION["id"] = $id;
        
        // redirect to the user's page
        redirect("/");
        
    }

?>
