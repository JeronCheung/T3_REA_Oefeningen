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
    <?php
    require "../standaard/nav.php" ;
    ?>
</header>

<main>
    <h1>
        <?php
        echo 'Oefening 2.2';
        ?>
    </h1>
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
<footer>
    <?php
    require "../standaard/footer.php" ;
    ?>
</footer>
</body>
</html>
