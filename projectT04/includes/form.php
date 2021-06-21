<?php
include ('../includes/db_functions.php');


if (isset($_GET["Name"]))
{
// Start de connection
    startConnection();

// Uitlezen van de personId in de query
    $query = "SELECT * FROM Activity" ;


// Voer de query uit
    $result = executeQuery($query);

// Haal de ene row op en sla deze op in $record
    $record = $result->fetch(PDO::FETCH_ASSOC);
}
    ?>

 <?php

if(isset($_GET["bewerk"]))
{

    $Name = $_GET["Name"];
    $Start = date("Y-m-d H:i:s", strtotime($_GET["Start"]));
    $End = date("Y-m-d H:i:s", strtotime($_GET["End"]));
    $Location = $_GET["Location"];


    $query = "UPDATE Activity SET [Name] = '" . $Name. "' , [Start]  = '" . $Start . "', [End] = '". $End ."' , [Location] =' "  . $Location . "'   WHERE [Name] = '" . $Name.  "';";
    $result = executeQuery($query);
    echo "De bijwekingen zijn succesvol voltooid <a href='../pages/overzichtspagina.php'>Klik hier om te gaan</a>";



}
 ?>
<form action="../pages/overzichtspagina.php" method="GET">

    <!-- PersonId is een verborgen input, zie Hoofdstuk 4 reader -->
    <input type="hidden" name="Name" value="<?php echo $record["Name"]; ?>">

    <br><br>
    <label for="Start">Start</label>
    <input type="datetime-local" name="Start" value="<?php echo $record["Start"]; ?>">

    <br><br>
    <label for="End">End</label>
    <input type="datetime-local" name="End" value="<?php echo $record["End"]; ?>">

    <br><br>
    <label for="Location">Location</label>
    <input type="text" name="Location" value="<?php echo $record["Location"]; ?>">

    <br><br>
    <input type="submit" value="Opslaan" name="bewerk">
</form>
