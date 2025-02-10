# Rekenen met PHP - Deel 2

- lees:
    >PHP heeft ingebouwde mathematische functies, bijvoorbeeld om getallen (met cijfers >achter de komma) af te ronden naar boven of naar beneden.

- Maak een nieuw bestand:  
    - `rekenen.php`
        - in de directory `public/02`
- Open deze pagina: https://www.php.net/manual/en/ref.math.php 
    > Daar kan je alle mathematische functions van PHP kunt vinden

## voorbeeld:

- lees:
    > om een getal af te ronden kun je `round()` https://www.php.net/manual/en/function.round.php gebruiken:

    ```php
    $getal = 11214.489;
    $afgerond = round($getal);
    echo "Als je ${getal} afrond dan krijg je: ${afgerond}";
    // Als je 11214.489 afrond dan krijg je: 11214
    ```

## Opdracht - getallen afronden


- Verzin een getal met:
    - `5 cijfers` achter de komma
- Zet dit getal in een `variabele`:
    - noem deze `$getal`
- Zoek de `functie` op die het getal `afrond` naar boven (Round fractions up)
    - Gebruik de functie met de variabele
    - Sla de uitkomst op in de variabele `$afgerond1`
    - Gebruik `echo` om de waarde op het scherm te zetten. 

## Naar beneden
- Zet je getal met kommas in een  nieuw `variabele`:
    - noem deze `$getal2`
- Zoek nu de function om getallen naar `beneden` af te ronden (Round fractions down)
    - Gebruik de functie met de variabele
    - Sla de uitkomst op in de variabele `$afgerond2`
    - Gebruik `echo` om de waarde op het scherm te zetten. 


## Opdracht - random getal genereren

- Zoek in de `documentatie` de functie waarmee je een random (willekeurig) getal genereert.

- Genereer `3` random getallen en:
    - zet deze in `3` verschillende `variabelen`
        - noem deze random1, random2, random3
- Tel `random1` en `random2` `bij` elkaar op
    - zet de uitkomst in een `nieuwe variabele`
- `Deel` de uitkomst door `random3`
    - zet de uitkomst in een nieuwe variabele;
- Zet de uitkomst van de berekening op het scherm met `echo`


## klaar
- commit alles naar je github

## INFO

Hier vind je meer info over mathematische functie in PHP

- https://www.php.net/manual/en/ref.math.php
- https://www.tutorialrepublic.com/php-tutorial/php-math-operations.php
