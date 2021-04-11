<?php
/**
 * User: Jeron Cheung
 * Date: 4-3-2021
 * File: T3_REA_Oefening_4_3.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>

    <title>
        <?php
        echo 'Oefening 4.3';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<!--     Voegt navigatie toe voor thema 3   -->
<?php
require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/nav.php";
?>
<main id="wrapper">
    <h2>
        Oefening 4.3
    </h2>
    <?php
    include "includes/functions.php";
    ?>

<?php
    echo "<h2> Taak 2 </h2>";
    echo "We zitten nu " . $unixTime = Time() . " seconden van 1 januari 1970.";
    echo "<hr>";

    echo "<h2> Taak 3 </h2>";
    calculateInterest(25000, 22200);
    echo "<hr>";

    echo "<h2> Taak 4 </h2>";
    piramide(15);
    echo "<hr>"
    ?>
</main>
<!--    Voegt een footer toe aan de pagina    -->
<?php
require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/footer.php";
?>
</body>
</html>
