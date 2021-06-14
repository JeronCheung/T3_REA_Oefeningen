<?php
session_start();
$pass = "welkom123";
if(isset($_POST["wacht"])) {
//als username en password wel goed is krijg je een lijst met gegevens
    if ($_POST["wacht"] == $pass) {
        $_SESSION['wacht'] = $pass;
        if (isset($_SESSION['naam'])) {
            //            Titels lijst met gegevens
            echo "<table id='lijst'>";
            echo "<tr>";
            echo "<th class='titel'>Name</th>";
            echo "<th class='titel'>start</th>";
            echo "<th class='titel'>End</th>";
            echo "<th class='titel'>Location</th>";
            echo "</tr>";

            $i = 0;
            while ($i <= 14) {
                //  Titels lijst met gegevens
                echo "<tr>";

                echo "</tr>";
                $i++;

            }
            //            Stuk tekst onderaan als je bent ingelogd met de juiste gegevens
            echo "</table>";
            echo "<footer class='ingelogd'>U bent ingelogd</footer>";
        }
    }

}
?>


