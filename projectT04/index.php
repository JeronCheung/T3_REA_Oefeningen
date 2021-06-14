<?php
/**
Jeron
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Sportacademie';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href= "/css/style.css">
</head>
<body>
<header>
    <!--            De navigatie wordt via een andere bestand gelinkt-->
    <?php
        include "/inetpub/wwwroot/projectT04/includes/nav.php";
    ?>
</header>
<main>
    <img id="background" alt="background" src="photos/sportback.jpg">
    <table>
        <td id="inleiding">In deze website kunnen studenten inloggen om hun activiteiten te kunnen bekijken en bijwerken</td>
    </table>
</main>
<footer>
    <!--    link naar footer php -->
    <?php
        include "/inetpub/wwwroot/projectT04/includes/footer.php";
    ?>
</footer>
</body>
</html>