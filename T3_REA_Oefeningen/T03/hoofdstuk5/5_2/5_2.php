<?php
session_start();
?>
<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
<head>
    <!-- titel van het tablad-->
    <title>
        <?php
        echo 'Opdracht 5.2';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    koppeling van opmaak website-->
    <link  rel="stylesheet" href="css/style.css">
</head>


<body>
<header>
    <!--    Verbind het navigatie php bestand-->
    <?php
    require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/nav.php";
    ?>
</header>
<main>
    <form action="resultaat.php" method="post">
    <h1>Inloggen </h1>
    <table>
        <Tr>
            <td>
                <P>
                    Welkom op onze website. <br>
                    Na correct in te loggen, krijgt u toegang tot onze schatkist. Dit is dan voor u, om te gebruiken!
                </P>
            </Td>
        </Tr>
        <Tr>
            <Td>
                Gebruikersnaam
            </Td>
            <Td>
                <label>
                <input type="text" name="naam" >
                </label>
            </Td>
        </Tr>
        <Tr>
            <Td>
                Wachtwoord
            </Td>
            <Td>
                <label>
                <input type="password" name="wacht" >
                </label>
            </Td>
        </Tr>

        <Tr>
            <td colspan="2">
                <label>
                    <input type="submit" name="Verzend"  value="verzend" id="send">
                </label>
            </Td>
        </Tr>
    </table>
</Form>
</main>




<footer>
    <?php
    require "/inetpub/wwwroot/T3_REA_Oefeningen/includes/footer.php";
    ?>
</footer>
</body>
</html>


