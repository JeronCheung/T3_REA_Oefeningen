<?php

function CheckTrafficLight($color, $ambulance)
{
    if ($ambulance == false)
    {
        if ($color == "rood" || $color == "oranje")
        {
            echo "je moet stoppen";
        }

        else
        {
            echo "je kan doorrijden";
        }
    }
    elseif ($ambulance == true)
    {
        echo "U moet stoppen";
    }
}

$rood = "er komt geen ambulance aan";
$groen = "er komt een ambulance aan.";

function showmenu ($dag)
{
    switch ($dag)
    {

        case "Monday";
            echo "Vandaag eet ik pasta";
            break;
        case "Tuesday";
            echo "Vandaag eet ik noodles";
            break;
        case "Wednesday";
            echo "Vandaag eet ik groenteschotel";
            break;
        case "Thursday";
            echo "Vandaag eet ik kip";
            break;
        case "Friday";
            echo "Vandaag eet ik eend";
            break;
        case "Saturday";
            echo "Vandaag eet ik hond";
            break;
        case "Sunday";
            echo "Vandaag eet ik kat";
            break;
    }

}



    function CheckLadiesNight ($geslacht, $age)
    {
        if ($age >= 18 && $geslacht == "vrouw")
        {
            if ($age >= 70)
            {
                echo "U heeft gratis entree!";
            }
            else
            {
                echo "U mag naar binnen, maar u moet wel betalen.";
            }
        }
        else
        {
            echo "U heeft geen toegang om naar binnen te gaan, deze club is alleen voor vrouwen boven de 18 jaar!";
        }
    }