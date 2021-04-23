<?php
//de piramide opdracht, meer cijfers komen in het midden en verspreid aan beide kanten met hetzelfde nummers

function piramide($height)
{
    if (is_string($height)) return "Geef een geldig getal op AUB.";

    for ($i = 0; $i <= $height; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br />";

    }
    //hoeveel seconden vanaf het jaar 1970s
    for ($i = $height - 1; $i >= 0; $i--) {
        for($j = 0; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br />";
    }
}


// het berekent hoe lang je ervoor moet gvoor gaan sparen voor die auto
function calculateInterest($carPrice, $moneySaved)
{
    $counter = 0;
    echo "Deze rekenmachine berekent hoelang je moet sparen met rent om een auto te kopen van $carPrice euro. je hebt nu $moneySaved gespaart.";
    while($carPrice >= $moneySaved)
    {
        //berekend rente
        $moneySaved = $moneySaved * 1.06;

        //veranderd het number format dan wordt ie afrond naar 2 nummers achter een comma en dan wordt de duizend seperator . is een decimal seperator een , is
        $moneyRounded = number_format($moneySaved, 2, ",", ".");
        //een echo na hoeveel maanden je na zoveel hebt.
        echo "Na $counter maanden heeft u $moneyRounded gespaart.<br>";
        //Telt de maanden op door Counter +1 te gebruiken.
        $counter++;
    }
    echo "Na $counter maanden heeft u $moneyRounded gespaart.<br>";
    $leftOver = $moneySaved - $carPrice;
    //returned na hoeveel maanden je gespaard en hoeveel je daarna nog over houd
    return " Je hebt zoveel maanden gespaart voor de auto $counter, en hebt $leftOver over.";
}

?>