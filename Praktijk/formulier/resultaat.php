<?php
/**
 * User: Jeron, Timomthy, Milan
 * Date: 12-4-2021
 * File: resultaat.php
 */
?>
<link  rel="stylesheet" href="../css/result.css">
<?php
$vraag = $_POST ["vraag1"];
$vraag2 = $_POST ["vraag2"];
$vraag3 = $_POST ["vraag3"];
$vraag4 = $_POST ["vraag4"];
$vraag5 = $_POST ["vraag5"];
$vraag6 = $_POST ["vraag6"];
$vraag7 = $_POST ["vraag7"];
$vraag8 = $_POST ["vraag8"];
$vraag9 = $_POST ["vraag9"];
$vraag10 = $_POST ["vraag10"];
$vraag11 = $_POST ["vraag11"];
$vraag12 = $_POST ["vraag12"];
$reden = $_POST ["reden1"];
$reden2 = $_POST ["reden2"];
$reden3 = $_POST ["reden3"];
$firstlast = $_POST["firstlast"];

    echo "<p> Je voor en achternaam:   $firstlast </p>";
    echo "<p> vraag 1:  $vraag  punt</p>";
    echo "<p> vraag 2:    $vraag2  punt</p>";
    echo "<p> vraag 3:    $vraag3  punt</p>";
    echo "<p> vraag 4:    $vraag4  punt</p>";
    echo "<p> vraag 5:    $vraag5  punt</p>";
    echo "<p> vraag 6:    $vraag6  punt</p>";
    echo "<p> vraag 7:    $vraag7  punt</p>";
    echo "<p> vraag 8:    $vraag8  punt</p>";
    echo "<p> vraag 9:    $vraag9  punt</p>";
    echo "<p> vraag 10:    $vraag10  punt</p>";
    echo "<p> vraag 11:    $vraag11  punt</p>";
    echo "<p> vraag 12:    $vraag12  punt</p>";
    echo "<p> Jouw reden:     $reden punt </p>";
    echo "<p> Jouw reden:     $reden2 punt</p>";
    echo "<p> Jouw reden:     $reden3 punt</p>";

$totaal = $vraag + $vraag2 +
    $vraag3 + $vraag4 + $vraag5 +
    $vraag6 + $vraag7 + $vraag8 +
    $vraag9 + $vraag10 + $vraag11 +
    $vraag12+ $reden3+ $reden+ $reden2;


echo "<P>";
    if ($totaal >= 24  )
    {
        echo "<img alt='green'  src='../foto/green.png'>";
        echo "<p>je hebt 15 punten of hoger goed gedaan. Deze opleiding past zeker bij jouw</p>";
        echo "<p><a href='https://www.kw1c.nl/subdomein/5/ict'>KW1C ICT</a> : link van de school website om je opleiding te kiezen</p>";
    }
    else if ($totaal <= 23 && $totaal >= 18 )
    {
        echo "<img  alt='yellow' src='../foto/yellow.png'>";
        echo "<p>je hebt tussen de 18 en de 23 punten. Ga naar een open dag of bekijk de link hieronder om er zeker van te zijn dat het bij jouw past </p>" ;
        echo "<p><a href='https://www.kw1c.nl/afdeling/811/ict-academie'>KW1C ICT Informatie website</a> : Link, ICT pagina om te kijken of het echt bij jouw past</p>";
    }

    else if ( $totaal <= 18)
    {
        echo "<img alt='red'  src='../foto/red.png'>";
        echo "<p>je hebt tussen de en de 15 punten. Deze opleiding past niet bij jouw </p>" ;
        echo "<p><a href='https://www.kw1c.nl/opleidingen'> KW1C informatie</a> : Link over alle opleidingen van deze school</p>";
    }
echo "</p>";

?>