<?php

include("/inetpub/wwwroot/T3_REA_Oefeningen1/Hooftstuk4/includes/db_functions.php");

startConnection();

$query = "SELECT * FROM tblRiddles";

// Voer de geschreven SQL query uit op de database
// Vang daarna het resultaat in de variabele $result
$result = executeQuery($query);

// Door de results heen loopen via een while


echo "<table border='1'>";
echo "<tr>";
echo "<th></th>";
echo "<th>Id</th>";
echo "<th>RiddleText:</th>";
echo "<th>RiddleText:</th>";
echo "<th>Creator:</th>";
echo "<th>CreateDate:</th>";
echo "</tr>";

// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{

    echo "<td><a href='T4_Rea_opdracht_4_1_Jeron_Cheung_D4_form.php?Id=". $row["Id"] . "'>Bewerk</a>";
    echo "<td>" . $row["Id"]. "</td>";
    echo "<td>" . $row["RiddleText"] . "</td>";
    echo "<td>" . $row["RiddleAnswer"] . "</td>";
    echo "<td>" . $row["Creator"] . "</td>";
    echo "<td>" . $row["CreateDate"] . "</td>";
    echo "</tr>";
}
echo "</table>";

