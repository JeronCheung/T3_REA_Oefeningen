<?php
/**
 * User: Jeron Cheung
 * Date: 25-2-2021
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
    <link href="../styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Oefening 2.2';
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
            echo '<ul><li><a href="T3_REA_Oefening_2_1.php">Oefening 2.1</a></li></ul>';
            echo '<ul><li><a href="T3_REA_Oefening_2_2.php">Oefening 2.2</a></li></ul>';
            ?>
        </ul>
        </p>
    </article>
    <article>
        <h2 id="uitwerking">
            <?php
            echo 'Loverboys slaan steeds vaker online toe, palmen slachtoffers minder in';
            ?>
        </h2>
        <p>
            <?php
            echo  '<figure> 
                       <img src="img/LB.jpg" alt="pic">
                    </figure>';
            echo             '
            Het idee dat loverboys de tijd nemen en misbruik maken van de verliefdheid van hun slachtoffers, is achterhaald. 
            Dat stelt het Centrum tegen Kinderhandel en Mensenhandel (CKM) in een dinsdag gepubliceerd rapport over dit onderwerp. 
            De organisatie keek naar 25 recente politiedossiers waarin loverboys vrouwen bedreigden en dwongen tot het hebben van seks.
            ';
            ?>
        </p>


        <p>
            <?php
            echo
            '<h2>Loverboys slaan steeds vaker online toe, palmen slachtoffers minder in </h2>
             <figure> 
             <img src="img/LB.jpg" alt="pic">
             </figure>
            <p> 
            Het idee dat loverboys de tijd nemen en misbruik maken van de verliefdheid van hun slachtoffers, is achterhaald. 
            Dat stelt het Centrum tegen Kinderhandel en Mensenhandel (CKM) in een dinsdag gepubliceerd rapport over dit onderwerp. 
            De organisatie keek naar 25 recente politiedossiers waarin loverboys vrouwen bedreigden en dwongen tot het hebben van seks.
            </p>
 
            ';
            ?>
        </p>

    </article>

</main>
</body>
</html>
