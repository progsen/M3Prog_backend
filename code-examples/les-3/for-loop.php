<?php
// Langere manier
$dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

$lengte = count($dagen);
for ($i = 0; $i < $lengte; $i++) {
  echo $i . " - " . $dagen[$i] . "<br/>";
}

