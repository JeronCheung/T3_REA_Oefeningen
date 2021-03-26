
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
        echo 'Opdracht 3.1';
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
            <!--    titel taak-->
            <h1> Taak 1</h1>
<!--            lijst van variabelen -->
            <?php
                $event = "Carnaval" ;
                $dagen = "zondag, maandag,dinsdag";
                $getal = 3 ;
                $getal2 = 40;
                $land =  "Nederland";
                $provincie = "Noord-Brabant";
                $voedsel = array("koffie Schrobbeler" ,"Worstenbrood");
            ?>
            <!--tekst met verbonden variabelen erin-->
            <?php
            $story =
                "$event is van oorsprong een gekerstend heidens volksfeest. Het duurt 
                officieel $getal dagen, $dagen direct voorafgaand aan de 
                vastentijd van $getal2 dagen. $event is bij uitstek het feest van zotheid, spot 
                en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel 
                $land een gebruik om carnaval op carnavalsvrijdag te openen. Op 
                Aswoensdag wordt $event afgesloten, maar de tradities verschillen per 
                regio. In het overgrote deel van $provincie wordt er afgesloten met 
                $voedsel[0], $voedsel[1]  soms met een Brabantse koffietafel.";
            echo"<p>" . $story . "</p>";

            ?>
            <!--    titel taak-->
            <h1>
                Taak 2
            </h1>
            <!--            lijst van variabelen -->
            <?php
            $bon1  =  120.0;
            $bon2  =  80.0;
            $bon3  =  40.0;
            ?>

<!--het totale bedrag van alle bonnetjes-->
            <?php
                echo "<p>";
                echo "Het totaalbedrag is = "  ;
                echo "€ " . $total = $bon1 + $bon2 + $bon3  ;
                "</p>";
                echo "<p>";
//                wat ze per persoon moeten betalen
                echo "Kosten per persoon bedrag: ". $total / 4 .  " Euro" ;
                "</p>";

            ?>s
            <!--    titel taak-->
            <h1>
                Challenge
            </h1>
<!--            de final kosten-->
            <?php
            $totaleinde = ($total + $total / 100 * 10 + 0.50) / 4;
            $afgerondTotaaleinde = number_format($totaleinde, 2, ",", '');
            echo 'De uiteindelijke kosten na het geven van fooi is €' . $afgerondTotaaleinde;

            ?>


        </main>
    <footer>
        <?php
        require "../includes/footer.php" ;
        ?>
    </footer>
    </body>
</html>



<!---->