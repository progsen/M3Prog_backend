<?php
// Comparison operators

// Met nummers
if (200 > 100) {
  echo "200 is groter dan 100";
}

// Met variabelen 
$getal1 = 200;
$getal2 = 100;
if ($getal1 > $getal2) {
  echo "${getal1} is groter dan ${getal2}";
}

// Met teksten
$persoon1 = "Jan";
$persoon2 = "John";
if ($persoon1 == $persoon2) {
  echo "Ze hebben dezelfde naam!";
} else {
  echo "Ze hebben een verschillende naam.";
}
