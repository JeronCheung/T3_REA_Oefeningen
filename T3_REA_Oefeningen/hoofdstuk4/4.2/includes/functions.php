<?php

function CheckTrafficLight($rood, $groen)
{
    if ($rood == "geen")
    {
        if ($rood == "rood" || $rood == "oranje")
        {
            echo "je moet stoppen";
        }

        else
        {
            echo "je kan doorrijden";
        }
    }
    elseif ($groen == "wel")
    {
        echo $groen;
    }
}
$rood = "er komt geen ambulance aan";
$groen = "er komt een ambulance aan.";

function showmenu ($dag)
    switch ($dag)
    {
       case"maandag";
           echo "vandaag is het maandag";
           break;
        case"maandag";
            echo "vandaag eet ik pasta";
            break;
        case"dinsdag";
            echo "vandaag eet ik noodles";
            break;
        case"woensdag";
            echo "vandaag eet ik groenteschotel";
            break;
        case"donderdag";
            echo "vandaag eet ik kip";
            break;
        case"vrijdag";
            echo "vandaag eet ik eend";
            break;
        case"zaterdag";
            echo "vandaag eet ik hond";
            break;
        case"zondag";
            echo "vandaag eet ik kat";
            break;
    }

    function CheckLadiesNight ($geslacht, $age)
    if($age => 18
    {
        echo "gratis entree";
    }
    elseif($age <= 18 || $geslacht == ""man)
    {
        echo " ";
    }
    elseif ($geslacht == "man" || $age => 70 || $geslacht == "vrouw")
    {
        echo "altijd gratis entree"
    }
    $age = 18;
    $geslacht = "man , vrouw";