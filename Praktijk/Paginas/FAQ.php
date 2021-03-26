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
        echo 'FAQ';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link met het css bestand-->
    <link href="../css/style.css" rel="stylesheet">
    <!--    link naar het JS bestand-->
    <script src="../json/functie.js" defer></script>
</head>
<body>
    <header>
        <a href="/Praktijk/index.php"><img id="logo" src="../foto/log-web-180.png"></a>
        <?php
        include '../Paginas/menu.php';
        ?>


    </header>
    <main>
<!--        vragen in knopjes-->
        <article id="height">
        <button onclick="button()"> Wat is respectgym voor een school? </button>
        <p id="vraag1"> </p>
        <button onclick="button2()"> Is het tot een bepaalde Leeftijdsgroep? </button>
        <p id="vraag2"></p>
        <button onclick="button3()">Hoe lang duurt een trainingsessie met een Personal Trainer?  </button>
        <p id="vraag3"></p>
        <button onclick="button4()"> Is er een pakker van sporten waaruit ik kan kiezen? </button>
        <p id="vraag4"></p>
        <button onclick="button5()"> is er een Diëtist aanwezig zo ja, waar kan ik de informatie over die persoon vinden? </button>
        <p id="vraag5">
        </p>
        <button onclick="button6()"> Zit ik vast aan een contract? </button>
        <p id="vraag6"></p>
        <button onclick="button7()"> Waar in den Bosch zijn jullie te vinden?  </button>
        <p id="vraag7">
        </p>
        <button onclick="button8()"> Waarin word je begeleid? </button>
        <p id="vraag8"></p>
        <button onclick="button9()"> Wat moet ik meenemen als ik kom fitnessen? </button>
        <p id="vraag9"></p>
        <button onclick="button10()"> Hoeveel keer per week moet ik met een Personal Trainer trainen? </button>
        <p id="vraag10"></p>
        </article>
    </main>
</body>
<footer>
<!--    tekst onderaan de pagina-->
    <?php
    include '../Paginas/footer.php';
    ?>
</footer>