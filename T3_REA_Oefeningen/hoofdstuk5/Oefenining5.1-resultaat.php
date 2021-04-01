<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
<head>
    <!-- titel van het tablad-->
    <title>
        <?php
        echo 'Opdracht 5.1';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    koppeling van opmaak website-->
    <link  rel="stylesheet" href="styles/opmaak2.css">
</head>

    <body>
        <header>
            <!--    Verbind het navigatie php bestand-->
            <?php
            require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/nav.php";
            ?>
        </header>
        <main id="opmaak">

        <h1> Uitschrijfformulie KW1C</h1>
        <hr>

            <?php
            $reden = $_GET["reden"];
            $firstlast = $_GET["firstlast"];
            $nummer = $_GET["nummer"];
            $uitschrijving = $_GET["uitschrijving"];
            $leerjaar = $_GET["leerjaar"];


            echo  "<p> Je voor en achternaam:  ". "<span class='opbouw'>" .$firstlast. "</span>"."</p>";

            echo "<p> Je studentnummer:  ". "<span class='opbouw'>". $nummer."</span>". "</p>";
            echo "<p> Datum van uitschrijving:  "."<span class='opbouw'>" .$uitschrijving."</span>". "</p>";
            echo "<p> De reden van de uitschrijving: " ."<span class='opbouw'>". $reden. "</span>". "</p>";
            echo "<p> Leerjaar:  " . "<span class='opbouw'>".  $leerjaar . "</span>". "</p>";

            if (isset($_GET['succes']))
            {
                echo"<p>" . $succes = $_GET['succes'] . "<span class='opbouw'> JA </span> ". "</p>";
            }
            elseif (isset($_GET['verwijder']))
            {
                echo "<p>" .$succes = "Aanmeldden bij de succesklas: " . ": NEE" . "</p>" ;
            }

            if (isset($_GET['verwijder']))
            {
                echo "<p>" .  $verwijder = $_GET['verwijder'] . "<span class='opbouw'> JA </span>". "</p>";
            }
            elseif (isset($_GET['succes']))
            {
                echo "<p>" . $verwijder = "Verwijderen gegevens: " ." <span class='opbouw'> NEE </span>" ."</p>";
            }

            $input = $_GET["toelichting"];
            echo  "<p>" ."Reden uitschrijving:" . "</p>";
            print_r($input);
            ?>


        </main>

    </body>
</html>
