<?php

// Opdracht 1: instellen van een functie waarmee je tijd kan zien.
$tijd = date("U:i");

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

// Opdracht 2: Maak zelf een functie aan met 2 parameters die het gemiddelde van 2 getallen berekent en weergeeft.
function berekeningVanGemiddelde($nummer1, $nummer2) {
    $gemiddelde = ($nummer1 + $nummer2) / 2;
    echo "<br>" . "Dit is het gemiddelde van nummer1 en nummer2: $gemiddelde";
}

berekeningVanGemiddelde(6, 9);

// Opdracht 3: Maak gebruik van de ingebouwde PHP-functies om de huidige datum op te halen. Schrijf een functie die berekent hoeveel dagen er nog over zijn tot het einde van het jaar.
function dagenTotEindeJaar () {
    $huidigeDatum = date("Y-m-d");
    $eindeJaar = date("Y-12-31");

    $huidigeTijd = strtotime($huidigeDatum);
    $eindeJaarTijd = strtotime($eindeJaar);

    $verschilInSeconden = $eindeJaarTijd - $huidigeTijd;
    $verschilInDagen = floor($verschilInSeconden / (60 * 60 * 24));

    return $verschilInDagen;
}

$aantalDagenOver = dagenTotEindeJaar();
echo "<br>" . "Er zijn nog $aantalDagenOver dagen over tot het einde van het jaar.";

// Opdracht 4: Maak een functie die een array met strings accepteert. De functie moet de lengte van elke string in de array berekenen en de totale lengte van alle strings samen retourneren.
function berekenTotaleLengte($array) {
    $totaleLengte = 0;

    foreach ($array as $string) {
        $totaleLengte += strlen($string);
    }

    return $totaleLengte;
}

$string1 = array("Mijn", "Naam", "Is", "Ensar", "Korkmaz");
$totaleLengte = berekenTotaleLengte($string1);
echo "<br>" . "De totale lengte van deze zin is: $totaleLengte";
?>