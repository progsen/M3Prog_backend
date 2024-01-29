<?php
/**
* Geeft de hexadecimale code terug voor de ingegeven rood, groen en blauw waarden
* Waardes moeten tussen 0 en 256 liggen
*
* @param int $r Rood waarde
* @param int $g Groen waarde
* @param int $b Blauw waarde
*
* @return string $kleurcode
*/
function maakHexKleurCode($r, $g, $b)
{

  // Vertaalt de r,g en b waarden naar hexadecimaal 
  // formaat en zet er een # voor
  $kleurcode =  sprintf("#%02X%02X%02X", $r, $g, $b);

  return $kleurcode;
}
