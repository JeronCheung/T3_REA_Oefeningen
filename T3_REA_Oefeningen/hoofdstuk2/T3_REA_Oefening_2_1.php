<?php
/**
 * User: Jeron Cheung
 * Date: 25-2-2021
 * File: T3_REA_Oefening_2_1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren oefeningen template thema 3 en 4 .';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
            echo 'Oefening 2.1';
        ?>
    </h1>
</header>
<main>
    <article id="menu">
        <h2>Thema 3</h2>
        <p>
        <ul>
            <li id="hoofd">Hoofdstuk 2</li>
            <?php
                echo '<ul><li><a href="T3_REA_Oefening_2_1.php">Oefening 2.1</a></li></ul>';
                echo '<ul><li><a href="T3_REA_Oefening_2_2.php">Oefening 2.2</a></li></ul>';
            ?>
        </ul>
        </p>
    </article>

    <article>
        <h2 id="uitwerking">
            <?php
                echo "<p>Wat is PHP</p>";
            ?>
        </h2>
        <p>

            <?php
                /* Met "Echo" roep je een waarde op in PHP. */
                echo "PHP is een opensource programmeer taal. Deze taal is onstaan in 1994. PHP staat voor 'Personal Home Space'.
                    Deze taal is bedoel om dynamische websites te bouwen. 
                    Deze taal is verhelijkbaar met de andere programmeer talen zoals Python, Perl en Ruby.";
            ?>
        </p>

        <p>
            <?php
            /* Uitleg over server-side en webservers */
             echo " 
            Een stuk code op een webserver pagina geeft het resultaat naar de computer van een ander gebruiker, 
            dan wordt het in een webbrowser vertoond. PHP wordt wordt niet weergeven als je een website inspecteerd."
            ?>
        </p>

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
</body>
</html>

