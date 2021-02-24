<?php
/**
 * User: S. Tudent
 * Date: Date
 * File: index.php
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
        <link href="styles/index.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>
                <?php
                    echo 'Uitwerking van oefeningen';
                ?>
            </h1>
        </header>
        <main>
            <article id="menu">
                <p>
                    <h2>Thema 3</h2>
                </p>
                <p>
                <ul>
                <li id="hoofd">Hoofdstuk 2</li>
                <?php
                    echo '<ul><li><a href="hoofdstuk2/T3_REA_Oefening_2_1.php">Oefening 2.1</a></li></ul>';
                    echo '<ul><li><a href="hoofdstuk2/T3_REA_Oefening_2_2.php">Oefening 2.2</a></li></ul>';
                ?>
                </ul>
                </p>
            </article>

            <article>
                <h2 id="uitwerking">
                    Uitwerkingen PHP oefeningen.
                </h2>
                <p>
                    <?php
                        echo "Hello World!";
                    ?>
                </p>
            </article>

        </main>
    </body>
</html>

