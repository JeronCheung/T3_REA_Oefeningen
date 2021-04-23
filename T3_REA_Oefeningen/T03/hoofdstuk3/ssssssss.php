
        <main id="wrapper">
            <h2>
                Oefening 3.1.
            </h2>

            <h3>Taak 1</h3>
            <?php
                $feestdag = "Carnaval";
                $dagen = ["zondag", "maandag", "dinsdag"];
                $vastenTijd = 40;
                $landVanCarnaval = "Nederland";
                $grootsteCarnavalLocatie = "Noord-Brabant";
                $afgeslotenHapjes = ["Worstenbrood", "koffie Schrobbeler"];


                $story = "$feestdag is van oorsprong een gekerstend heidens volksfeest. Het duurt
                        officieel 3 dagen, $dagen[0], $dagen[1] en $dagen[2] direct voorafgaand aan de
                        vastentijd van $vastenTijd dagen. $feestdag is bij uitstek het feest van zotheid, spot
                        en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel
                        $landVanCarnaval een gebruik om $feestdag op carnavalsvrijdag te openen. Op
                        Aswoensdag wordt $feestdag afgesloten, maar de tradities verschillen per
                        regio. In het overgrote deel van $grootsteCarnavalLocatie wordt er afgesloten met
                        $afgeslotenHapjes[0],  $afgeslotenHapjes[1] soms met een Brabantse koffietafel.";

                echo "<p>" . $story . "</p>";
            ?>
            <h3>Taak 2</h3>
            <?php
            //bonnetjes prijzen:
            $bon1 = 10.5;
            $bon2 = 12;
            $bon3 = 8.5;
            //totaal bedrag van alle bonnen:
            $totaalBedrag = $bon1 + $bon2 + $bon3;
            //bedrag weergeven op pagina:
            echo "<p>" . "Het totaalbedrag is " . $totaalBedrag . " euro." . "</p>";

            //uitrekenen wat ieder moet betalen:
            $betaalPerPersoon = $totaalBedrag / 4;
            //weergeven op pagina:
            echo "<p>" . "Kosten per persoon bedragen: " . $betaalPerPersoon . " euro." . "</p>";
            ?>
            <h3>Challenge</h3>
            <?php
            $finalCosts = ($totaalBedrag + $totaalBedrag / 100 * 10 + 0.50) / 4;

            echo "<p>De uiteindelijke kosten na het geven van fooi is " . $finalCosts . " euro.</p>";
            ?>
        </main>
        <!--    Voegt een footer toe aan de pagina    -->
        <?php
        include "../includes/footer.php";
        ?>
    </body>
</html>