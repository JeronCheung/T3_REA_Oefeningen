
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
<form action="#" method="post">
    <select required  name="keuze" multiple  class="input">
        <option  value='group'> group</option>
        <option  value='distinct'> distinct</option>
    </select>
    <input type="submit" name="submit" value="Select"/>
</form>
</body>
</html>

<?php
var_dump($_POST);
// Laad alle database gerelateerde functions in.
include("includes/db_functions.php");
// Start een connectie met de database
StartConnection();
session_start();
// Maak een variabele met de SQL query
$query = "SELECT * FROM country";
$group = "SELECT region from country group by region";
$distinct = "SELECT distinct region FROM country ";
if (isset($_POST['submit'])) {
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
    if ($_POST ["keuze"] == 'group')
        {
           echo $group; // Displaying Selected Value
            $result = executeQuery($group);
        }
    else if ($_POST ["keuze"] == 'distinct')
        {
           echo $distinct; // Displaying Selected Value
            $result = executeQuery($distinct);
        }
    else
        {
            echo $query;
            $result = executeQuery($query);
        }
}

// Voer de geschreven SQL query uit op de database
// Vang daarna het resultaat in de variabele $result

echo "<table>";
echo "<tr>";
echo "<th>region:</th>";
echo "</tr>";
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>". $row["region"] . "</td>";
    echo "</tr>";
}
?>

















