<?php
/**
 * User: Jeron, Timomthy, Milan
 * Date: 12-4-2021
 * File: footer.php
 */
?>

<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
<head>
    <!-- titel van het tablad-->
    <title>
        <?php
        echo 'footer';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    koppeling van opmaak website-->
    <link rel="stylesheet" href="../../Praktijk/css/footer.css ">
</head>

<footer>
<?php
/* 24 uur klok  */
$time = date("H");
/* $timezone is tijdzone */
$timezone = date("e");
/* als het minder dan 1200 uur is*/
if ($time < "12")
{
    echo   "<p>". "Good morning"  . " | " . date("d-m-Y G:i:s") . "</p>" ;
}
else
    /* als het groter of gelijk is dan 1700 uur dan is het goedenmiddag*/
    if ($time >= "12" && $time < "17")
    {
        echo   "<p>". "Good afternoon"  . " | " . date("d-m-Y G:i:s") . "</p>" ;
    } else
        /*  als het tijd tussen of gelijk aan 1700 and 1900 uur is dan zegt het goedenavond */
        if ($time >= "17" && $time < "19")
        {
            echo   "<p>". "Good evening"  . " | " . date("d-m-Y G:i:s") . "</p>" ;
        } else
            /* Als het gelijk of later is dan 1900 uur dan zegt het 's nachts*/
            if ($time >= "19")
            {
                echo   "<p>". "Good night"  . " | " . date("d-m-Y G:i:s") . "</p>" ;
            }
?>
</footer>


