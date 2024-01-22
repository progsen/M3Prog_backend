---
title: Rekenen met PHP
layout: page
permalink: :path/:basename
parent: Les 2
nav_exclude: true
---

# Rekenen met PHP - Arithmetic operators

Met PHP kun je uiteraard ook berekeningen uitvoeren.

```php
<?php
    $leeftijd = 18;
    $dagen_per_jaar = 365;
    $leeftijd_in_dagen = $leeftijd * $dagen_per_jaar;
    echo "Ik ben " . $leeftijd . " jaar " . " en dus al " . $leeftijd_in_dagen . " dagen oud!"; 
?>
```

Dat ziet er dan zou uit:

![Voorbeeld](img/voorbeeld.png)

### Dit zijn de arithmetic operators in PHP


![Arithmetic operators](img/arithmic-operators.png)


### Oefenen met een aantal formules


- Lees dit eerst door:
    - https://nl.wikihow.com/Omrekenen-tussen-Celsius-en-Fahrenheit
        > Hier vind je de formules die je gaat gebruiken in je PHP-code.

- Maak een nieuw bestand:
    - `temperatuur.php` 
        - in de directory `public/02`

- neem deze code over in `temperatuur.php` :    
    > ![](img/voorbeeldrekenen.PNG)
    > - hiermee rekenen we `Fahrenheit naar Celsius` om

- schrijf nu de PHP-code die onderstaande formules gebruiken:

    - `Celsius naar Fahrenheit`
    - `Celsius naar Kelvin`
    - `Kelvin naar Celsius`

## TESTEN
- open `temperatuur.php`  in je browser
    - kijk of het werkt.

## klaar
- commit alles naar je github


## Bonus

- Zet de uitgevoerde berekening leesbaar op het scherm (gebruik de variabelen in de `echo`)
- Je ziet dan de berekening met de echte waarden van de variabelen in de tekst die je toont. 

## Bonus klaar?
- commit alles naar je github



## INFO

Hier vind je meer info over de arithmetic operators, met voorbeelden:

- [https://nl.wikibooks.org/wiki/Programmeren_in_PHP/Rekenen](https://nl.wikibooks.org/wiki/Programmeren_in_PHP/Rekenen)
- [https://www.php.net/manual/en/language.operators.arithmetic.php](https://www.php.net/manual/en/language.operators.arithmetic.php)

