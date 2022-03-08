---
title: For loop door een array 
layout: page 
permalink: :path/:basename 
parent: Les 3 
nav_exclude: true
---

# For loop door een array

Een for-loop gebruik je om een stuk code een aantal keren uit te voeren (Bekijk de slides van Les 3!)  
Je kunt een for-loop dus mooi gebruiken om elementen uit een array op het scherm te zetten. Je telt namelijk vanaf een start index, naar een eind index en telt elke keer 1 op bij de loop variabele.
Die loop variabele (vaak $i genoemd) kun je dus gebruiken om het element op die array index op te halen.

**Voorbeeld**
![For-loop door array](images/for-loop.png)

---

### Opdrachten
{: .text-blue-100 .fs-6 }

Maak een nieuw bestand `for-loop.php` met HTML structuur en zet de PHP-code weer tussen de `<body></body>`.

- Maak een array `$pokemons` met minstens 5 [Pokemon namen](https://www.pokemon.com/nl/pokedex/)
- Maak nog een array `$images` met de bijbehorende image url in (right-click op afbeelding, kopieer afbeeldings-url)
- Zorg dat op index 0 in de eerste array de naam staan en op index 0 in de tweede array de afbeeldings-url.
- Schrijf een for-loop die telt van 0 tot de lengte van de array
- Gebruik in de loop `echo` en zet de naam tussen een `<h1></h1>` tag en de afbeeldings url in de `src` van een `<img>` tag.
- Voeg wat kleuren en stijlen toe met een CSS-bestand

Je hebt nu met een loop 5 of meer Pokemon characters en hun afbeelding op het scherm gezet in HTML.

![Pokemons](images/pokemons.gif)

---

Probeer nu onderstaande array functions uit op de array met Pokemon namen en zet het resultaat elke kaar op het scherm met `print_r()` of `var_dump()`:

Zet in een PHP comment tag wat de function doet en wat het resultaat is.

- array_reverse()
- implode()
- sort()
- array_push()
- array_pop()

Meer array functions uitproberen mag altijd natuurlijk.

---

Hier vind je meer info over de for-loop met voorbeelden:

- [Voorbeelden for loops](https://nl.wikibooks.org/wiki/Programmeren_in_PHP/Loops)
- [PHP Array functions](https://www.php.net/manual/en/ref.array.php)
- [PHP for-loop](https://www.php.net/manual/en/control-structures.for.php)

