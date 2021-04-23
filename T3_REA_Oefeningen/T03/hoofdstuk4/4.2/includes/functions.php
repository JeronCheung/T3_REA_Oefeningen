<?php

function CheckTrafficLight($kleur, $help)
{
    if ($help == false)
    {
        if ($kleur == "rood" || $kleur == "oranje")
        {
            echo "je moet stoppen";
        }

        else
        {
            echo "je kan doorrijden";
        }
    }
    elseif ($help == true)
    {
        echo "U moet stoppen";
    }
}

$red = "helaas komt er geen ambulance aan";
$green = " een ambulance is onderweg aan.";

function showmenu ($dagen)
{
    switch ($dagen)
    {

        case "Monday";
            echo "Vandaag eet ik friet";
            break;
        case "Tuesday";
            echo "Vandaag eet ik kipjes";
            break;
        case "Wednesday";
            echo "Vandaag eet ik bananen";
            break;
        case "Thursday";
            echo "Vandaag eet ik appels";
            break;
        case "Friday";
            echo "Vandaag eet ik kroket";
            break;
        case "Saturday";
            echo "Vandaag eet ik frikandel";
            break;
        case "Sunday";
            echo "Vandaag eet ik poesje";
            break;
    }

}


    function CheckLadiesNight ($gender, $leeftijd)
    {
        if ($leeftijd >= 18 && $gender== "man")
        {
            if ($leeftijd >= 70)
            {
                echo "gratis entree!";
            }
            else
            {
                echo "je kan naar binnen, maar betalen.";
            }
        }
        else
        {
            echo "je kan naar binnen, de club is alleen voor vrouwen boven de 18 jaar!";
        }
    }