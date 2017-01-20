<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("password_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["password"]) or empty($_POST["confirmation"]))
        {
            apologize("You must provide your password! ");
        }
        else if ($_POST["password"]!=$_POST["confirmation"])
        {
            apologize("Your passwords don't matchs!");
        }
        
        // gets all of the data of that username involved if it does really exist in the database
        $rows = CS50::query("SELECT * FROM users WHERE id= ?", $_SESSION["id"]);
        
        // if the database doesn't have a username that the user inputed, then it insert it to the database
        CS50::query("UPDATE users SET hash = ? WHERE id = ?", password_hash($_POST["password"], PASSWORD_DEFAULT), $_SESSION["id"]);
        

        // gets the "id" of lastly inserted username
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        // remember that user's now logged in by storing user's ID in session
        $_SESSION["id"] = $id;
        
        // redirect to the user's page
        redirect("/");
        
    }

?>
