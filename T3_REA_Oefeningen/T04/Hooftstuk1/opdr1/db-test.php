<link rel="stylesheet" href="css/style.css">
<?php
echo "<h1>Uitwerking.</h1><br>";
// Open de database connectie en ODBC driver
try {
    $pdo = new PDO("odbc:odbc2sqlserver");
} catch (PDOException $e) {
    // Bij een error, toon dan deze melding
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    // Stop het script
    die();
}
echo "database connectie gelukt<br>";
// Uitvoeren van een SQl query
try {
    // Query schrijven
    $sql = "SELECT * FROM tblRiddles";
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();
    // Stop het script
    die();
}
// Door de results heen loopen via een

echo "<table><tr><td>ID:</td><td>Raadsel: </td><td>Oplossing: </td><td>Bedenker:  </td><td>Datum: </td></tr>";
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
 echo "<tr><td>" . $row["Id"] . "</td>";
 echo "<td>" . $row["RiddleText"] . "</td>";
 echo "<td>" . $row["RiddleAnswer"] . "</td>";
 echo "<td>". $row["Creator"] . "</td>";
 echo "<td>" . $row["CreateDate"] . "</td></tr>";
}
echo "</table>";

?>

