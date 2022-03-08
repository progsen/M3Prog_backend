<?php
// Langere manier
$dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

$lengte = count($dagen);
for ($i = 0; $i < $lengte; $i++) {
  // De loop begint bij $i=0, en loop zolang $i kleiner is dan de lengte van de array
  // Elke loop-iteratie wordt $i met 1 opgehoogd ($i++)
  // $i is eerst 0, dan 1, dan 2 tot (in dit geval) 6.
  // Zo kun je alle elementen uit een array verwerken
  echo $i . " - " . $dagen[$i] . "<br/>";
}

