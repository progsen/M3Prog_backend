---
title: Rekenen met PHP - Deel 2
layout: page
permalink: :path/:basename
parent: Les 2
nav_exclude: true
---

# Rekenen met PHP - Deel 2

PHP heeft ingebouwde mathematische functies, bijvoorbeeld om getallen (met cijfers achter de komma) af te ronden naar boven of naar beneden.

- Maak een nieuw bestand: `rekenen.php` en maak daarin de volgende opdrachten.
- [Open deze pagina](https://www.php.net/manual/en/ref.math.php) waar je alle mathematische functions van PHP kunt vinden

Bijvoorbeeld om een getal af te ronden kun je [round()](https://www.php.net/manual/en/function.round.php) gebruiken:

```php
$getal = 11214.489;
$afgerond = round($getal);
echo "Als je ${getal} afrond dan krijg je: ${afgerond}";
// Als je 11214.489 afrond dan krijg je: 11214
```

---

## Opdracht - getallen afronden
{: .text-blue-100 .fs-6 }

- Verzin een getal met 5 cijfers achter de komma
- Zet dit getal in een variabele met de naam `$getal`
- Zoek de functie op die het getal afrond naar boven (Round fractions up)
- Gebruik de functie met de variabele
- Sla de uitkomst op in de variabele `$afgerond1`
- Gebruik echo om de waarde op het scherm te zetten. 

Zoek nu de function om getallen naar beneden af te ronden (Round fractions down) en gebruik de function met de variabele `$getal` die je hebt gemaakt.


## Opdracht - random getal genereren
{: .text-blue-100 .fs-6 }

Zoek in de documentatie de functie waarmee je een random (willekeurig) getal genereert.

- Genereer 3 random getallen en zet deze in 3 verschillende variabelen
- Tel getal 1 en getal 2 bij elkaar op, zet de uitkomst in een variabele
- Deel de uitkomst door getal 3 en zet dit in een nieuwe variabele;
- Zet de uitkomst van de berekening op het scherm met `echo`

---

Hier vind je meer info over mathematische functie in PHP

- [https://www.php.net/manual/en/ref.math.php](https://www.php.net/manual/en/ref.math.php)
- [https://www.tutorialrepublic.com/php-tutorial/php-math-operations.php](https://www.tutorialrepublic.com/php-tutorial/php-math-operations.php)
- [Zelf Googlen kan natuurlijk ook](https://www.google.com/search?q=php+math+functions+with+examples)

