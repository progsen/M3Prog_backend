<?php
include 'functions_kosten.php';

$rit1 = berekenRitKosten(663, 15, 1.90);
echo '€' . number_format($rit1, 2) ."\n";

$check1 = berekenRitKostenAnders(663, 15, 1.90);
echo 'CHECK1: €' . number_format($check1['kosten'], 2) ."\n";

$rit2 = berekenRitKosten(1438, 20,  1.46);
echo '€' . number_format($rit2, 2) ."\n";

$check2 = berekenRitKostenAnders(1438, 20,  1.46);
echo 'CHECK2: €' . number_format($check2['kosten'], 2) ."\n";

$rit3 = berekenRitKosten(1991, 18.47,  2.23);
echo '€' . number_format($rit3, 2) ."\n";

$check3 = berekenRitKostenAnders(1991, 18.47,  2.23);
echo 'CHECK3: €' . number_format($check3['kosten'], 2) ."\n";


