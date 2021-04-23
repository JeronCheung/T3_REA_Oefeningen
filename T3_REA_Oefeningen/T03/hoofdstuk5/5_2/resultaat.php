<?php

$user = "jeron";
$pass = "cheung";

session_start();
if(isset($_POST["naam"]) && isset($_POST["wacht"]))
{
    if($_POST["naam"]== $user && $_POST["wacht"]== $pass)
    {
        $_SESSION['naam']= $user;
        if (isset($_SESSION['naam']))
        {
            echo "welcome ". $_SESSION['naam'];
        }
    }
    else
    {
        echo "username or password is incorrect ";
    }
}
else
{
    echo "resultaten niet goed opgestuurd";
}

?>