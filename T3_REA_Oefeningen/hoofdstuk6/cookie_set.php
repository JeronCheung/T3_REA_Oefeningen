<?php
    require "../includes/nav.php";

    // Is er een POST value "txtUsername" opgegeven?
    if( isset($_POST["txtUsername"]) == true)
    {
        $expires = time() + (3600 * 24 * 365);
        $username = $_POST["txtUsername"];

        setcookie("userUsernameCookie", $username, $expires, "/");
    }


    else
    {
        echo "<p>Je bent vergeten een username op te geven. Ga terug!</p>";
    }

    // Is er een POST value "selCountry" opgegeven?
    if( isset($_POST["selCountry"]) == true)
    {
        $country = $_POST["selCountry"];
        $expires = time() + 3600 * 24 * 356;

        setcookie("userCountryCode", $country, $expires, "/");
        //  Opdracht 2: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userCountryCode
        //   Value: $_POST["selCountry"]
		//   Path: "/"

    }

    else
    {
        echo "<p>Je bent vergeten een land op te geven. Ga terug!</p>";
    }


        include "../includes/footer.php";

// Stuur een gebruiker door naar de index pagina!
    // header("Location: /T3_REA_Oefeningen/index.php");

?>