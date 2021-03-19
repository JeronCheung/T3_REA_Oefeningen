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
            echo 'Opdracht 2.2';
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
        <h1>
        <!-- Titel van de opdracht-->
        <?php
            echo 'Oefening 2.2';
        ?>
        </h1>
        <article>
            <!-- titel met tekst-->
            <h2 id="uitwerking">
            <?php
                echo 'Loverboys slaan steeds vaker online toe, palmen slachtoffers minder in';
            ?>
            </h2>
            <p>
            <!-- foto met tekst in meerdere echo's-->
            <?php
            echo  '<figure> 
            <img src="img/LB.jpg" alt="pic">
            </figure>';
                echo             '
                Het idee dat loverboys de tijd nemen en misbruik maken van de verliefdheid van hun slachtoffers, is achterhaald. 
                Dat stelt het Centrum tegen Kinderhandel en Mensenhandel (CKM) in een dinsdag gepubliceerd rapport over dit onderwerp. 
                De organisatie keek naar 25 recente politiedossiers waarin loverboys vrouwen bedreigden en dwongen tot het hebben van seks. ';
            ?>
            </p>
            <p>
            <!--            foto met tekst in 1 echo -->
            <?php
                echo '<h2>Loverboys slaan steeds vaker online toe, palmen slachtoffers minder in </h2>
                <figure> 
                <img src="img/LB.jpg" alt="pic">
                </figure>
                <p> 
                Het idee dat loverboys de tijd nemen en misbruik maken van de verliefdheid van hun slachtoffers, is achterhaald. 
                Dat stelt het Centrum tegen Kinderhandel en Mensenhandel (CKM) in een dinsdag gepubliceerd rapport over dit onderwerp. 
                De organisatie keek naar 25 recente politiedossiers waarin loverboys vrouwen bedreigden en dwongen tot het hebben van seks.
                </p> ';
            ?>
            </p>

        </article>

        </main>
    </body>
    <footer>
        <!--    Verbind het footer php bestand-->
        <?php
        require "../includes/footer.php" ;
        ?>
    </footer>
</html>
