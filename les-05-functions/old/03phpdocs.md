

# 05 - De PHP Documentatie lezen en gebruiken

- lees:
    > - De officiële documentatie voor PHP vind je op [https://www.php.net/](https://www.php.net/)
    > - Daar vind je alle (technische) documentatie van PHP.
    > Dat geeft je `ALLE informatie` over de ingebouwde `functions` en `variabelen` van PHP.

**Gebruik de documentatie als je wilt weten hoe je een bepaalde function gebruikt!** 

## Documentatie lezen

Zoek in de [documentatie van PHP](https://www.php.net/manual/en/) naar onderstaande functions (rechtsbovenin kun je zoeken):

- `strtoupper`
- `strpos`
- `file_exists`

### Wat doen de functions?

- Maak een document `functions.md`
    - maak voor elke function hierboven een kopje en schrijf er onder:
       >- Wat de function doet? Waar heb je hem voor nodig?
       >- Welke parameters deze function heeft (dit kun je lezen bovenaan de pagina van de function)
       >- Van welk type gegeven (string, int, boolean...?) zijn deze parameters? (dit zie je onder **Parameters**)
       >- Welk type gegeven geeft deze function terug als return waarde? (dit zie je onder **Return Values**)

### De functions gebruiken

- Maak nu een nieuw bestand `functions.php`
    - in de directory `public/01`
- gebruik de functions in `PHP-code` (vergeet de start- en eind PHP tags niet!)
- Zorg dat je voor elke function iets op het scherm zet met `echo`

    > Bijvoorbeeld voor de function [strlen()](https://www.php.net/manual/en/function.strlen.php){: target="_blank" } kan je zo gebruiken:

```php
<?php
    // strlen() geeft de lengte van een string terug
    $naam = "Duurzaam Huis"; 
    $lengte = strlen($naam);
    echo "De lengte  " . $naam . " is: " . $lengte;
?>
```

> Tip: Je mag een voorbeeld gebruiken die vaak onderaan de documentatie staan (of gebruik een `search engine` om een voorbeeld te vinden: )

- Vraag het bestand `functions.php` op via localhost en kijk of het werkt.

## EXTRA

> Heb je de smaak te pakken?

- Probeer dan meer String functions uit:
    - https://www.php.net/manual/en/ref.strings.php

## klaar
- commit alles naar je github





