<?php

include "/inetpub/wwwroot/projectT04/includes/nav.php";
   echo "    <link  rel='stylesheet' href= '/css/style.css'>";
session_start();

include ('../includes/db_functions.php');
startConnection();

$query = "SELECT * FROM Activity";
$result = executeQuery($query);


$groupby =  "select [name] from activity GROUP By [name] ";
$groupby2= "select [Start] from  activity GROUP By  [Start] ";
$groupby3= "select [End] from  activity GROUP By [End] ";
$groupby4= "select Location from  activity GROUP By Location ";

echo "<table id='lijst'>";
echo "<tr>";
echo "<th class='titel'></th>";
echo "<th class='titel'><a href='overzichtspagina.php?WhatFilter=Alphabet>'> Name</a></th>";
echo "<th class='titel'><a href='overzichtspagina.php?WhatFilter=datum'>Start </a></th>";
echo "<th class='titel'><a href='overzichtspagina.php?WhatFilter=datum>'> End</a></th>";
echo "<th class='titel'><a href='overzichtspagina.php?WhatFilter=Alphabet'>Location</a></th>";
echo "</tr>";

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td><a href='../includes/form.php?Name=". $row["Name"] ."' >Bewerk</a>" ."</td>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Start"] . "</td>";
    echo "<td>" . $row["End"] . "</td>";
    echo "<td>" . $row["Location"] . "</td>";
    echo "</tr>";
}
//            Stuk tekst onderaan als je bent ingelogd met de juiste gegevens
echo "</table>";

if(isset($_GET["whatFilter"]))
{
    var_dump($_GET["whatFilter"]);
    //is de inhoud van de $_GET alphabet?
    if ($_GET["whatFilter"] == "alphabet")
    {
            $query = $groupby;
        }
        //of is de inhoud *voer wat in*

    elseif
        ($_GET["whatFilter"] == "datum")
        {
            $query = $groupby2;
        }
    elseif
        ($_GET["whatFilter"] == "datum")
        {
            $query = $groupby3;
        }
    elseif
        ($_GET["whatFilter"] == "Alphabet")
        {
            $query = $groupby4;
        }
    else
        {
            $query = "SELECT * FROM Activity ";
        }
    }

else
    {
        $query = "SELECT * FROM Activity ";
    }









