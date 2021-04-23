<?php
/**
 * User: Jeron Cheung
 * Date: 25-2-2021
 * File: T3_REA_Oefening_2_1.php
 */
?>
<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
<head>
    <!--    titel van het tablad-->
    <title>
        <?php
        echo 'Opdracht 2.1';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link met het css bestand-->
    <link href="../styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <!--    Verbind het navigatie php bestand-->
    <?php
        require "../includes/nav.php" ;
    ?>

</header>
<main>
    <h1>
        <!--titel van opdracht in php-->
        <?php
        echo 'Oefening 2.1';
        ?>
    </h1>


    <article>
        <!--titel in php van het verhaal-->
        <h2 id="uitwerking">
            <?php
                echo "Wat is PHP";
            ?>
        </h2>
        <!--tekst in php-->
        <p>

            <?php
                /* Met "Echo" roep je een waarde op in PHP. */
                echo "PHP is een opensource programmeer taal. Deze taal is onstaan in 1994. PHP staat voor 'Personal Home Space'.
                    Deze taal is bedoel om dynamische websites te bouwen. 
                    Deze taal is verhelijkbaar met de andere programmeer talen zoals Python, Perl en Ruby.";
            ?>
        </p>
        <!--tekst in php-->
        <p>
            <?php
            /* Uitleg over server-side en webservers */
             echo " 
            Een stuk code op een webserver pagina geeft het resultaat naar de computer van een ander gebruiker, 
            dan wordt het in een webbrowser vertoond. PHP wordt wordt niet weergeven als je een website inspecteerd."
            ?>
        </p>
<!--tekst in php-->
        <p>
            <?php
            /* Uitleg over de werking van databases en webservers met PHP */
            echo "Een server-side programmeer taal is een opensource scripttaal die webservers verwerken. ";
            echo "In HTML (HyperText Markup Language) en CSS (Cascading Style Sheets) gebruiken we een client-side programmeertaal. ";
            echo "Door te werken met gebruikers en het opzoeken om de gegevens eruit te halen in een database. 
            Met PHP ga je deze gegevens in een database verwerken. ";
            ?>
            
        </p>
    </article>

</main>
<footer>
    <?php
    require "../includes/footer.php" ;
    ?>
</footer>
</body>
</html>

