---
title: Functions schrijven
layout: page 
permalink: :path/:basename 
parent: Les 3 
nav_exclude: true
---

# Functions schrijven

Vaak gebruik je bepaalde code opnieuw. Dubbele code wil je absoluut voorkomen, dat zorgt voor bugs en de code moet je meerdere plekken gaan aanpassen bij veranderingen.

Daarom schrijf je een `function` die de code uitvoert. Zorg dat de function altijd één ding doet en verantwoordelijk is voor één taak.
Je kunt de function dan vanaf verschillende plekken in je code uitvoeren. De function doet dan elke keer hetzelfde. Wil je iets aan de function veranderen dan hoef je dat maar op één plek te doen.

### Hoe schrijf je een function?

Een function begint altijd met het woord `function` en daarna de naam van de function (die duidelijk zegt wat de function doet). Gebruik het liefst kleine letters voor de function naam.

```php

function current_date(){
    // Toont de huidige datum
    echo date('d-m-Y');
}
```

Deze functie zet de huidige datum op het scherm met echo. Je voert de function uit als volgt:

```php
current_date(); // 03-09-2022

```

### Alle functions in een eigen bestand / include gebruiken om in te laden

Het is handig om veelgebruikte functions in een apart PHP-bestand te zetten en dat bestand met `include` in te laden in een ander PHP-bestand die de functions nodig heeft.
Je maakt jouw functions op die manier toegankelijk voor het andere PHP-bestand.

#### functions.php

```php
<?php
function current_date(){
    echo date('d-m-Y');
}

function optellen($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}
?>
```

#### script.php

Zo laadt je het functions bestand in, in een bestand `script.php`

```php
<?php
//Het functions bestand moet in dezelfde map staan;
include 'functions.php';

// Functions aanroepen uit functions.php
current_date();

$totaal = optellen(100, 200);
echo $totaal; // 300
?>
```


### Argumenten meegeven aan een function
Een function wordt pas krachtig als je er input argumenten aan kunt geven waar de function wat mee kan doen. Denk aan het berekenen van iets (celsius naar fahrenheit) of het aanpassen van iets (naam naar hoofdletters) etc.

Je kunt zelf verzinnen hoe JIJ wilt dat de function werkt. En je verzint ZELF de namen van de argumenten voor de function

Stel je wilt een function die alleen de namen uit een array met een bepaalde lengte teruggeeft.

#### Wat heeft de function als input?

Bedenk eerst wat moet je aan die function geven zodat de function zijn werk kan doen? 
1. Een array met namen, laten we die `$name` noemen
2. De naam lengte, laten we het `$lengte` noemen (dit moet dus een integer zijn)

#### Wat heeft de function als output?

Bedenk nu wat je wilt dat de function als `return` waarde moet teruggeven.  

1. Laten we een array teruggeven met alleen de namen met de juiste lengte

#### Bedenk een duidelijke naam

Bedenk nu wat een goede naam is die duidelijk maakt wat de function doet.  
Laten we de `zoekNamenMetLengte()` gebruiken.

#### Schrijf de function definitie alvast
Je kunt nu de function definitie alvast opschrijven:

```php
// Je ziet dat de function $namen en $lengte binnenkrijgt
function zoekNamenMetLengte($namen, $lengte){
    // Hier komt de code die iets doet met $namen en $lengte
    
    return $gevonden;
}
```

De regel met `return $gevonden` zorgt er voor dat de waarde `$gevonden` wordt teruggegeven aan de code die function aanroept.

```php
// Stel we hebben deze lijst met namen
$klas = ['Henk','Ahmed', 'Patricia', 'Joey'];

// En we willen alle namen met een lengte van 4 terugkrijgen 
// Dan kun je de function zo aanroepen en het resultaat opslaan 
$resultaat = zoekNamenMetLengte($klas, 4);
```

#### Schrijf de uiteindelijke code voor de function 

Alleen doet de function nu nog niets, de function kun je op deze manier de juiste namen laten vinden en laten teruggeven

```php
// Je ziet dat de function $namen en $lengte binnenkrijgt
function zoekNamenMetLengte($namen, $lengte){
    // Lege array maken om de gevonden namen in op te slaan
    $gevonden = []; 
    
    //Loop door de gegeven $namen
    foreach($namen as $naam){
        // Als de lengte van de naam gelijtk is aan $lengte (in ons voorbeeeld is dat 4)
        if(strlen($naam) == $lengte){
            // Dan voegen we de $naam (die bevat de echte naam) toe aan de array $gevonden
            $gevonden[] = $naam;
        }
    }
    
    // Hier hebben we dus een array met de namen met lengte == 4
    return $gevonden;
}
```

Zorg dat je snapt hoe functions werken. Dit is belangrijk. Je kunt dan zelf functions gaan bedenken en coderen die je nodig hebt voor functionaliteiten in je website.









### Opdrachten
- TODO: function syntax en aanroepen
- TODO: function return
- TODO: function argumenten

---

Hier vind je meer info over Arrays en Array functions in PHP

- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)
- [https://www.php.net/manual/en/ref.array.php](https://www.php.net/manual/en/ref.array.php)

