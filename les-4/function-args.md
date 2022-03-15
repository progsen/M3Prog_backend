---
title: Functions met input
layout: page 
permalink: :path/:basename 
parent: Les 4 
nav_exclude: true
---

# Functions met input argumenten

Een function is meestal een stuk interessanter wanneer deze input ontvangt om mee te werken.
Denk aan het berekenen van iets (celsius naar fahrenheit) of het aanpassen van iets (naam naar hoofdletters) etc.

Bedenk eerst een function wel echt nodig en handig is. De function hier onder bijvoorbeeld is niet echt handig. De function heeft geen input en doet altijd hetzelfde, hoe vaak zul je deze function gebruiken? 

```php
function tweePlusTwee(){
    $resultaat = 2 + 2;
    return $resultaat;
}
```

Bedenk ook dat er al veel ingebouwde functions in PHP zitten die je kunt gebruiken. Kijk dus altijd eerst in de [documentatie van PHP](https://www.php.net/manual/en/funcref.php) of er niet een ingebouwd function is die doet wat je nodig hebt.
Het sorteren van een array kan met `sort()`, dus een eigen function maken die een array sorteert, is niet nodig.


## Stappenplan om zelf een function te schrijven
{: .text-blue-100 .fs-6 }

Het is belangrijk dat je GOED nadenkt over HOE jij wilt dat de function functioneert.

- Wat doet de function? Wat voegt het schrijven van de function toe?
- Wat is een duidelijke naam voor de function?
- Welke input argumenten heeft de function nodig?
- Welke output of return waarde heeft de function? 

---

### Voorbeeld: Function schrijven voor de reiskosten opdracht
{: .text-blue-100 .fs-6 }

Je hebt in de vorige les de code geschreven voor het berekenen van de kosten van een autorit naar Bordeaux.
Daar kun je heel goed een eigen function voor schrijven. Zo kun je de kosten voor een reis naar een andere bestemming makkelijk berekenen volgens dezelfde berekening.

Lees dit voorbeeld goed door en kijk welke informatie je in elke stap moet achterhalen om de function te kunnen schrijven.

### Stap 1 - Wat heeft de function nodig als input?
{: .text-green-100 .fs-6 }

Bedenk eerst wat de function nodig heeft (welke input argumenten) om de berekening te kunnen uitvoeren.

1. De afstand in kilometers, laten we die `$afstand_km` noemen
2. Het verbruik van de auto (hoeveel kilometer rijd je met 1 liter benzine), laten we die `$km_per_liter` noemen
3. De prijs voor een liter benzine: `$liter_prijs`

### Stap 2 - Wat geeft de function als output of resultaat?
{: .text-green-100 .fs-6 }

Bedenk nu: Geeft de function iets terug of niet? Als de function iets terug moet geven dan kun je dat met `return` teruggeven. 

1. De function geeft de kosten in euro's terug. Laten we de return waarde dus `$kosten_euro` noemen.
2. Dit is waarschijnlijk een getal met cijfers achter de komma, dus een `float`.

### Stap 3 - Wat is een goede naam voor de function?
{: .text-green-100 .fs-6 }

Bedenk nu wat een duidelijke naam is die beschrijft wat de function doet. De function `doetIets()` en `voeruit()` zeggen niets over wat de function doet bijvoorbeeld.   

- Laten we de function `function berekenRitKosten()` noemen.
- Zet nu de input argumenten tussen de haakjes: `function berekenRitKosten($afstand_km, $km_per_liter, $literprijs)`


### Stap 4 - Schrijf nu de function definitie in code op
{: .text-green-100 .fs-6 }

Je weet de naam, de input argumenten en de `return` waarde. Schrijf de outline van de function nu alvast op.

```php

function berekenRitKosten($afstand_km, $km_per_liter, $literprijs){

  // Hier gaan de berekening toevoegen

  return $kosten_euro;

}
```

De regel `return $kosten_euro` zorgt er voor dat de waarde `$kosten_euro` wordt teruggegeven aan de code die function gaat gebruiken.

```php
// Stel, je gaat een reis van 500 km maken, in een auto die 1 op 20 rijdt en een liter benzine kost € 2.45
// Dan kun je de function zo aanroepen en de kosten opslaan in een variabele
$kosten = berekenRitKosten(500, 20, 2.45);

// Voor een reis van 1200km, auto die 1 op 10 rijdt en een bezine prijs van 1.89
$kosten = berekenRitKosten(1200, 10, 1.89);

```

### Stap 5 - Schrijf nu de code voor de function
{: .text-green-100 .fs-6 }

De function berekent nu nog niets. Hieronder staat de code die de berekening doet met de input

```php
function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs){

  // Hoeveel liter benzine heb je nodig?
  $aantal_liters = $afstand_km / $km_per_liter;

  // Kosten: aantal liter x literprijs
  $kosten_euro = $aantal_liters * $liter_prijs;  

  return $kosten_euro;

}
```

---

### Opdracht: Gebruik de function in je code
{: .text-blue-100 .fs-6 }

![Ritkosten](images/ritkosten.png)

Voeg de function `berekenRitKosten()` die hierboven staat toe aan je `functions.php` en reken in `script.php` de volgende ritkosten uit door de function aan te roepen.

- Zet elke keer het resultaat op het scherm. 
- Gebruik de ingebouwde function `number_format()` om de prijs met 2 cijfers achter de komma op het scherm te zetten ([lees de documentatie](https://www.php.net/manual/en/function.number-format))

**Bereken met de `berekenRitKosten()` function:**

- Autorit naar Berlijn (663 km), auto verbruikt 1 liter elke 15 km, literprijs benzine is € 1.90
- Autorit naar Stockholm (1438 km), auto verbruikt 1 liter elke 20 km, literprijs benzine is € 1.46
- Autorit naar Kiev (1991 km), auto verbruikt 1 liter elke 18.47 km, literprijs benzine is € 2.23

Vraag de pagina op via localhost, maak een screenshot als bewijs.  Probeer wat kleuren of stijlen toe te voegen met CSS zodat het er prettig uit ziet.





