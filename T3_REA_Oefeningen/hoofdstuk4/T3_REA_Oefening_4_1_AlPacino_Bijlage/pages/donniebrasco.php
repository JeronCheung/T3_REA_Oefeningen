<!DOCTYPE html>
<!-- 
    Auteur:             Rob JM Wessels
    Aanmaakdatum:       dec 2020
    
    KW1C instructie:    Resultaat opdracht 3.2 thema 2
-->
<html lang="en-us">ss
    <head>
        <title>
            <?php
            $titel = "Donniebrasco";
            echo $titel ;
            ?>
        </title>
        <?php
        include "../includes/top.php";          // includen top.php
        ?>
    
    <body>
            <article>
                <h2>Donnie Brasco</h2>
                <p>
                    <img id="donniebrasco" src="../images/donniebrasco.PNG" alt="Donnie">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lectus a risus semper semper nec non lectus. Ut ac pulvinar lectus. Donec rhoncus rutrum tincidunt. Vivamus gravida sed arcu scelerisque dapibus. Sed porta laoreet nulla a consequat. Phasellus mattis, urna in interdum iaculis, sem eros fringilla odio, vel elementum libero nisi placerat urna. Nullam faucibus dui vitae eros lacinia, quis vulputate libero sagittis. 
                    
                </p>
            </article>
            <?php
            include "../includes/bottom.php";       // includen bottom.php
            ?>

    </body>
</html>
