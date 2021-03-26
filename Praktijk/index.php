<?php
/**
 * User: Jeron Cheung
 * Date: 25-2-2021
 * File: opdracht 2.2.php
 */
?>
    <!DOCTYPE html>
    <!--html taal set in nederlands-->
    <html lang="nl">
<head>
    <!--    titel van het tablad-->
    <title>
        <?php
        echo 'Home';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link met het css bestand-->
    <link href="css/style.css" rel="stylesheet">
</head>
<main>
    <article>
<!--        foto links boven-->
        <a href="index.php"><img id="logo" src="foto/log-web-180.png"></a>
<!--        toont een menu boven aan-->
        <?php
        include 'Paginas/menu.php';
        ?>
<!--middelste foto-->
        <p>
        <img id="midden" src="foto/home-slider3.png">
        </p>
<!--de kleinere foto's onderaan de pagina-->
        <p>
            <img class="kleinefotos" src="foto/indoor.png">
            <img class="kleinefotos" src="foto/outdoor.png">
            <h3 class="sport"> <b> Indoor Sporten </b> </h3>
            <h3 class="sport"> <b> Outdoor Sporten <b></h3>
        </p>
    </article>
</main>