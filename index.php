<?php
/**
 * User: T. Winnubst
 * Date: 4-3-2021
 * File: T3_REA_Oefening_2_1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            <?php
            echo 'Praktijk Home pagina';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/Stylesheet.css" rel="stylesheet">
    </head>
        <body>
        <header>
<!--            De navigatie wordt via een andere bestand gelinkt-->
         <?php
            require "includes/Navigation.php";
         ?>
        </header>
        <main>
<!--            afbeelding van de schoolplattengrond en de achtergrond-->
            <img id="background_home" src="foto/background_home_page.jpg" alt="Plattegrond van Koning Willem 1 College"
        </main>
        <!--Footer bestand-->
        <footer>
            <?php
            require "includes/footer.php";
            ?>
        </footer>
        </body>
</html>
