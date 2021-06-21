<?php
/**
 * User: Jeron Cheung
 * Date: 25-2-2021
 * File: index.php
 */
?>
<link href="/styles/Footer.css" rel="stylesheet">
<footer>
    <?php


        if (isset($_COOKIE["userCountryCode"]) == true && isset($_COOKIE["txtUsername"])== true)
        {
            $username = $_COOKIE["userUsernameCookie"];
            $countrycode = $_COOKIE ["userCountryCode"];
            echo "<img id='flag' src='/T3_REA_Oefeningen/hoofdstuk6/flags/$countrycode.png'>" . "     $username " . " | " . "IO1D4"  . " | " . date("d-m-Y G:i:s") ;
        }

        else
        {
            echo "<a href='/T3_REA_Oefeningen/hoofdstuk6/T3_REA_Oefening6_1.php'>Geef een naam op</a>" . " | " . "IO1D4"  . " | " . date("d-m-Y G:i:s") ;
        }
    ?>
</footer>


