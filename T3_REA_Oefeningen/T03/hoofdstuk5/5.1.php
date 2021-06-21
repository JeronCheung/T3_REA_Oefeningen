<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
<head>
    <!-- titel van het tablad-->
    <title>
        <?php
        echo 'Opdracht 5.1';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    koppeling van opmaak website-->
    <link  rel="stylesheet" href="styles/opmaak2.css">
</head>


<body>
<header>
    <!--    Verbind het navigatie php bestand-->
    <?php

    ?>
</header>
<main>
    <h1> Uitschrijfformulie KW1C</h1>
    <hr>
<form action="Oefenining5.1-resultaat.php" method="get">
    <p>
        <label> Je voor en achternaam  </label>
        <input type="text" value="" class="input" name="firstlast">
    </p>


    <p>
    <label> Je studentnummer
        <input type="text" value="" class="input" name="nummer">
    </label>
    </p>


    <label> Datum van uitschrijving
        <input type="text" value="" class="input" name="uitschrijving">
    </label>

    <p>
    <label > Reden uitschrijving </label>
        <select name="reden" class="input">
            <option value="anders"> Een andere opleidng doen</option>
            <option value="werk"> Ik ga toch liever werken</option>
            <option value="corona"> Corona crisis</option>
            <option value="docent"> Slechte docenten</option>
        </select>
    </p>

    <p>
    <label>Leerjaar</label> <br>
        <input type="radio" name="leerjaar"  value="1ste leerjaar"> 1ste leerjaar<br>
        <input type="radio" name="leerjaar"  value="2e leerjaar"> 2e leerjaar<br>
        <input type="radio" name="leerjaar"  value="3e leerjaar"> 3e leerjaar<br>
        <input type="radio" name="leerjaar"  value="4e leerjaar"> 4e leerjaar <br>
    </p>

    <p>
    <label>

        <input type="checkbox" value="Aanmelding voltooid" name="succes"> Ik wil me aanmelden bij de succesklas
        <br>
        <input type="checkbox" value="Gegevens worden verwijderd" name="verwijder"> Verwijder mijn gegevens uit het systeem
    </label>
    </p>
    <p>
    <label for="uitschrijving">Geef hieronder de reden van je uitschrijving: </label>
    <br>
        <textarea name="toelichting" cols="80" rows="15" placeholder="Schrijf hier..."></textarea>
    </p>

    <p>
        <input type="submit" name="verzend" value="Send">
    </p>

</form>
</main>
<footer>
    <?php
    require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/footer.php";
    ?>
</footer>
</body>
</html>