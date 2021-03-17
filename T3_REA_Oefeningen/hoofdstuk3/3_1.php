
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
        <?php
        require "../standaard/nav.php" ;
        ?>
    </header>
        <main>
            <h1> Taak 1</h1>
            <?php
                $event = "Carnaval" ;
                $dagen = "zondag, maandag,dinsdag";
                $getal = 3 ;
                $getal2 = 40;
                $land =  "Nederland";
                $provincie = "Noord-Brabant";
                $voedsel = array("koffie Schrobbeler" ,"Worstenbrood");
            ?>

            <?php
            echo
            "<p>";
            echo
                $story =
                "$event is van oorsprong een gekerstend heidens volksfeest. Het duurt 
                officieel $getal dagen, $dagen direct voorafgaand aan de 
                vastentijd van $getal2 dagen. $event is bij uitstek het feest van zotheid, spot 
                en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel 
                $land een gebruik om carnaval op carnavalsvrijdag te openen. Op 
                Aswoensdag wordt $event afgesloten, maar de tradities verschillen per 
                regio. In het overgrote deel van $provincie wordt er afgesloten met 
                $voedsel[0], $voedsel[1]  soms met een Brabantse koffietafel.";
            echo
            "</p>";
            ?>

            <h1>
                Taak 2
            </h1>
            <?php
            $perpersoon =  120;
            $verdeling = 3;
            ?>

            <?php
                echo
                "<p>";
                echo
                "Kosten per persoon is € $perpersoon";
                "</p>";
            ?>

            <?php
                echo "<br>";
                echo "<p>";
                echo "Het totaalbedrag is = " ;
                echo "€ " . $total = $perpersoon + $perpersoon + $perpersoon + $perpersoon  ;
                "</p>";
                echo "<p>";
                echo "Kosten per persoon bedragen: ". $total / $verdeling . " Euro";
                "</p>";

            ?>

            <h1>
                Challenge
            </h1>
            <?php
            $totalepp = 160/ 10 * 4 + 480 - 50;
            echo $totalepp / 3;

            ?>


        </main>
    <footer>
        <?php
        require "../standaard/footer.php" ;
        ?>
    </footer>
    </body>
</html>



<!---->