<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'zoeken';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet">
</head>
<body>

<main>
    <h2>
        Oefening 2.2.
    </h2>
    <fieldset>
        <legend>Zoekopdrachten:</legend>
        <i>Tip: Laat een veld leeg, dan zal er niet op gezocht worden.</i>
        <br><br>
        <form action='T4_REA_Oefening_2.2_Jeron_Cheung_D4.php' method='get'>
            <label for="txtRiddleText">Raadsel:</label>
            <input type="text" name="txtRiddleText">
            <br><br>
            <label for='txtCreator'>Maker:</label>
            <input type='text' name='txtCreator'>
            <br><br>
            <input type='submit' value='Versturen'>
        </form>
    </fieldset>

</main>
</body>
</html>

<?php
// Laad alle database gerelateerde functions in.
include("includes/db_functions.php");
// Start een connectie met de database
StartConnection();
// Maak een variabele met de SQL query
$query = "SELECT * FROM tblRiddles";
// Taak 4: Programmeer hieronder je code
if (empty($_GET["txtRiddleText"]) == true && empty($_GET["txtCreator"]) == true)
{
    $query="SELECT * FROM tblRiddles";
}
//
elseif (empty($_GET["txtCreator"]) == true)
{
    $query="SELECT * FROM tblRiddles WHERE RiddleText LIKE '%" . $_GET["txtRiddleText"] . "%'";
}

elseif (empty($_GET["txtRiddleText"] == false) && empty($_GET["txtCreator"]) == false)
{
    $query = "SELECT * FROM tblRiddles WHERE RiddleText LIKE '%". $_GET["txtRiddleText"]. "%' AND Creator = '" .$_GET["txtCreator"] . "'";
}

elseif (empty($_GET["txtCreator"] == false) && (empty($_GET["txtRiddleText"]) == true))
{
    $query = "SELECT * FROM tblRiddles WHERE Creator = '" . $_GET["txtCreator"] . "'";
}


// Voer de geschreven SQL query uit op de database
// Vang daarna het resultaat in de variabele $result
$result = executeQuery($query);
echo $query;
echo "<table>";
echo "<tr>";
echo "<th>ID:</th>";
echo "<th>Raadsel:</th>";
echo "<th>Oplossing:</th>";
echo "<th>Bedenker:</th>";
echo "<th>Datum:</th>";
echo "</tr>";
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>". $row["Id"] . "</td>";
    echo "<td>". $row["RiddleText"] . "</td>";
    echo "<td>". $row["RiddleAnswer"] . "</td>";
    echo "<td>". $row["Creator"] . "</td>";
    echo "<td>". $row["CreateDate"] . "</td>";
    echo "</tr>";
}
echo "</tr>";
echo "</table>";
?>