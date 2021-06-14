<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        session_start();
        echo 'Sportacademie';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <!--            De navigatie wordt via een andere bestand gelinkt-->
    <?php
    include "/inetpub/wwwroot/projectT04/includes/nav.php";
    ?>
</header>
<main>
    <form action="/../projectT04/pages/overzichtspagina.php" method="post">
<table class="inloggen">
    <Tr>
        <Td >
            Wachtwoord
        </Td>
        <Td>
            <label>
                <input class="input" type="password" required name="wacht" >
            </label>
        </Td>
    </Tr>

    <Tr>
        <td>
            <!--                        knop inloggen-->
            <label>
                <input type="submit" name="Verzend"  value="Login" id="send">
            </label>
        </Td>
    </Tr>
    </table>
</main>

</body>
</html>

