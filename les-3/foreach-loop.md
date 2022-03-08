---
title: Foreach loop door een array
layout: page 
permalink: :path/:basename 
parent: Les 3 
nav_exclude: true
---

# Foreach loop door een array

De elementen in een normale array kun je dus ophalen met de index (die bij 0 begint)
In een *associatieve array* gebruik je een eigen *key* voor de *value* die er bij hoort.
Zo kun je direct iets ophalen waarvan je de *key* al weet.

Hoe kun je door een associatieve array loop-en? Met de **foreach-loop**!
De foreach-loop geeft je elke keer de *key* EN de *value* die bij die key hoort:

*Voorbeeld foreach-loop door associatieve array:*

![Associatieve array](images/foreach-loop.png)

*Resultaat*  

![Foreach resultaat](images/foreach-result.png)

---

### Opdracht 1
{: .text-blue-100 .fs-6 }

- Maak een nieuw bestand `associatief.php` met HTML-structuur.
- Zoek op internet naar het verbruik van 5 huishoudelijke apparaten in KwH.
- Maak een nieuwe variabele `$verbruik` met een **associatieve array*.
- Als `key` gebruik je de naam van het apparaat, de `value` is het verbruik van het apparaat (zorg dat dat een `integer`is en geen tekst).

Schrijf nu een foreach loop die eerst de naam van het apparaat en dan het verbruik van het apparaat op het scherm zet. Je mag zelf weten hoe.
Gebruik wat verschillende HTML-tags in je output (en misschien wat stijling met een CSS bestand?).

### Opdracht 2

- Maak nu Na de foreach-loop alvast een variabele `$totaal` met het getal 0  
- Kopieer nu de hele `foreach-loop` en zet hem onder de vorige `foreach-loop`
- Verwijder de code IN de loop
- Tel nu IN de loop elke keer het verbruik van elk apparaat op bij het `$totaal`
- Gebruik echo NA de loop om het totaal (de variabele `$totaal`) op het scherm te zetten.

Je hebt nu een foreach-loop gebruikt om al het verbruik bij elkaar op te tellen.

![Verbruik](images/apparaten.png)

Het hoeft er nog niet mooi uit te zien. Belangrijkste is dat je weet hoe je arrays kunt gebruiken, en hoe je een loop kunt gebruiken om waarden op te vragen en weer te geven. 

Er is een andere manier, namelijk een array function, waarmee je dit in 1x kunt doen zonder loop, welke function is dat?
Zoek deze op in de [PHP-documentatie](https://www.php.net/manual/en/ref.array.php) en gebruik de functie om het totaal te berekenen. Kom er hetzelfde totaal uit?

---
- [https://www.php.net/manual/en/ref.array.php](https://www.php.net/manual/en/ref.array.php)

