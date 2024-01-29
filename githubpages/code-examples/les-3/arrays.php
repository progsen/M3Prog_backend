<?php
// Langere manier
$dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

// Verkorte manier
$dagen = ["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag"];

echo $dagen[3] . "\n\n";
// Er wordt "donderdag" op het scherm gezet


// Print de array in tekst formaat
print_r($dagen) . "\n\n";

// Geeft wat extra info over het soort data dat er in zit
var_dump($dagen) . "\n\n";

// Lange manier
array_push($dagen, "nog een dag");

// Verkorte manier
//$dagen[] = "nog een dag";

echo count($dagen) . "\n\n"; // 8

echo implode(' >> ', $dagen) . "\n\n";

sort($dagen);
echo implode(' >> ', $dagen) . "\n\n";
// dinsdag >> donderdag >> maandag >> nog een dag >> vrijdag >> woensdag >> zaterdag >> zondag
