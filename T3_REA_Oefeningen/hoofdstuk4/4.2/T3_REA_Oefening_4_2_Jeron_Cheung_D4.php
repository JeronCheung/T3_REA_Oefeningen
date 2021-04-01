<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
    <head>
        <!-- titel van het tablad-->
        <title>
            <?php
            echo 'Opdracht 4.2';
            ?>
        </title>
        <!-- declaren karakterset -->
        <meta charset="UTF-8">
        <!-- declareren viewpoint -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <!--    Verbind het navigatie php bestand-->
            <?php
            require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/nav.php";
            ?>
        </header>
        <main>
            <?php
            echo "<h2>Taak 1</h2>";
                require "/inetpub/wwwroot/T3_REA_Oefeningen/hoofdstuk4/4.2/includes/functions.php";
                CheckTrafficLight("green", true);
            echo "<hr><h2>Taak 2</h2> ";
                $dagen = date("l");
                showmenu($dagen);
            echo "<hr><h2>Taak 3</h2>";
                CheckLadiesNight("man", 67);
            ?>
        </main>
        <footer>
            <?php
                require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/footer.php";
            ?>
        </footer>
    </body>
</html>