<?php
function berekenRitKosten($afstand, $literprijs, $km_per_liter){
    $aantal_liter = $afstand / $km_per_liter;
    $kosten = $aantal_liter * $literprijs;
    return $kosten;
}

// Afstand = 525 (km)
// Literprijs = 2.46 (euro)
// Kilometer met 1 liter = 15  (1 op 15)
$kostenParijs = berekenRitKosten(525, 2.46, 15);
echo '€ ' . $kostenParijs;
// € 86.1

