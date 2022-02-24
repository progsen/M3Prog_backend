<?php
$land = 'Nederland';
$hoofdstad = 'Amsterdam';

// Met een punt plak je teksten en variabelen aan elkaar (string concatenation)
echo "De hoofdstad van " . $land . " is " . $hoofdstad;

// Direct in de tekst met ${} - alleen bij tekst in dubbele quotes
echo "De hoofdstad van ${land} is ${hoofdstad}";

// Direct in de tekst (alleen bij dubbele quotes) - maar liever met ${}
echo "De hoofdstad van $land is $hoofdstad";

// De uitvoer is hetzelfde: "De hoofdstad van Nederland is Amsterdam"

// In single quotes worden variabelen niet vervangen, je ziet ze letterlijk
echo 'De hoofdstad van $land is $hoofdstad';

// Uitvoer: De hoofdstad van $land is $hoofdstad
