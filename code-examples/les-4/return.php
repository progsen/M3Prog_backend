<?php
function maakHexKleurCode($r, $g, $b){

    // Vertaalt de r,g en b waarden naar hexadecimaal 
    // formaat en zet er een # voor
    $kleurcode =  sprintf("#%02X%02X%02X", $r, $g, $b);
  
    return $kleurcode;
}

// Resultaat opslaan in een variabele en daarna echo
$code1 = maakHexKleurCode(134,234,45);
echo $code1 . "\n"; // nieuwe regel: \n

// Function resultaat direct aan echo geven kan ook!
echo maakHexKleurCode(235,34,178) . "\n";

