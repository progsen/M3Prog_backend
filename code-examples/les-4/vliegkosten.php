<?php
include 'functions.php';

$kosten = berekenVliegKosten(3722, 2.05, 20, false);
echo '€ ' . number_format($kosten,2) . "\n";

$kosten = berekenVliegKosten(9276, 3.11, 10, false);
echo '€ ' . number_format($kosten,2) . "\n";

$kosten = berekenVliegKosten(803, 2.83, 0, true);
echo '€ ' . number_format($kosten,2) . "\n";