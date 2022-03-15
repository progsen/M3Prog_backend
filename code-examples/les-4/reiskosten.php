<?php
include 'functions.php';

$rit1 = berekenRitKosten(663, 1.90, 15);
echo '€' . number_format($rit1, 2) ."\n";

$rit2 = berekenRitKosten(1438, 1.46, 20);
echo '€' . number_format($rit2, 2) ."\n";

$rit3 = berekenRitKosten(1991, 2.23, 18.47);
echo '€' . number_format($rit3, 2) ."\n";

