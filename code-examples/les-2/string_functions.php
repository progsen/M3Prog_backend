<?php
// Lengte van een tekst opvragen met strlen()

$tekst = "Backend programming";
$lengte = strlen($tekst); // $lengte = 19
echo "${tekst} bevat ${lengte} tekens";
// Backend programming bevat 19 tekens

// Tekst vervangen
$tekst = "Backend programming";
$aangepast = str_replace('Backend', 'Frontend', $tekst);
echo $aangepast;
// Frontend programming

$tekst1  = 'Dit is een string.';
$tekst2 = "Dit ook";
$samen  = $tekst1 . " " . $tekst2;
$extra = $samen . " met dit er nog bij";
echo $extra; // Dit is een string. Dit ook met dit er nog bij


