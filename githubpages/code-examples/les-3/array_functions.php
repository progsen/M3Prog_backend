<?php
$cijfers = [1, 5, 3, 9, 7];

// Aantal elementen tellen
echo count($cijfers); // 5

// Sorteren
sort($cijfers); // [1, 3, 5, 7, 9]

// Laatste element verwijderen en ophalen
$lijst = ["a", "b", "c"];
$last = array_pop($lijst);
echo $last; // "c" en $lijst is nu ["a","b"] geworden

