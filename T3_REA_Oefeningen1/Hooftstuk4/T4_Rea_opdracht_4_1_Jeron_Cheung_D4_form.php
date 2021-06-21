<?php
include("/inetpub/wwwroot/T3_REA_Oefeningen1/Hooftstuk4/includes/db_functions.php");

if (isset($_GET["Id"]))
{


// Start de connection
startConnection();

// Uitlezen van de personId in de query
$query = "SELECT * FROM tblRiddles WHERE Id  = ". $_GET["Id"];


// Voer de query uit
$result = executeQuery($query);

// Haal de ene row op en sla deze op in $record
$record = $result->fetch(PDO::FETCH_ASSOC);

?>
    <!-- Update.php bestaat nog niet, deze ga je in deel 2 van hoofdstuk 4 maken -->
    <form action="T4_Rea_opdracht_4_1_Jeron_Cheung_D4_form.php" method="GET">

        <!-- PersonId is een verborgen input, zie Hoofdstuk 4 reader -->
        <input type="hidden" name="Id" value="<?php echo $record["Id"]; ?>">

        <br><br>
        <label for="RiddleText">Naam</label>
        <input type="text" name="RiddleText" value="<?php echo $record["RiddleText"]; ?>">

        <br><br>
        <label for="RiddleAnswer">Answer</label>
        <input type="text" name="RiddleAnswer" value="<?php echo $record["RiddleAnswer"]; ?>">

        <br><br>
        <label for="Creator">Creator</label>
        <input type="text" name="Creator" value="<?php echo $record["Creator"]; ?>">

        <br><br>
        <label for="CreateDate">CreateDate</label>
        <input type="datetime-local" name="CreateDate" value="<?php echo $record["CreateDate"]; ?>">

        <br><br>
        <input type="submit" value="Opslaan" name="bewerk">
    </form>

<?php
}
    if(isset($_GET["bewerk"]))
    {
        startConnection();

        $Id = $_GET["Id"];
        $RiddleText = $_GET["RiddleText"];
        $RiddleAnswer = $_GET["RiddleAnswer"];
        $Creator = $_GET["Creator"];
        $CreateDate = $_GET["CreateDate"];

        $query = "UPDATE tblRiddles SET RiddleText = ' " . $RiddleText . " ', RiddleAnswer = '" . $RiddleAnswer . "', Creator = '" . $Creator . "', CreateDate = '" . $CreateDate . "' WHERE Id = " . $Id . ";";

        $result = executeQuery($query);
        echo "Joke succesbol bijgewerkt <a href='T4_rea_opdracht_4_1_Jeron_Cheung_D4.php'>Klik hier om te gaan</a>";
    }
?>