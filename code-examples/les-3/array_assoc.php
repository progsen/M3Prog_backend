<?php
// Associatieve array
$persoon = ['voornaam' => 'Giovanni', 'achternaam' => 'di Luca', 'leeftijd' => 19];

$persoon["voornaam"] = "Carlo";
$persoon["Leeftijd"] = 65;
// ['voornaam' => 'Carlo', 'achternaam' => 'di Luca', 'leeftijd' => 65];


// Leeftijd ophalen uit de array
// Je gebruikt de key "leeftijd" om de value te krijgen
echo $persoon['leeftijd']; // 19

