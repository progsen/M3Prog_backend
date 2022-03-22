---
title: GET data lezen
layout: page 
permalink: :path/:basename 
parent: Les 5 
nav_exclude: true
---

# GET data lezen uit de URL

Er zijn twee belangrijk HTTP methodes om gegevens NAAR de server te sturen: GET en POST.

De `GET` methode gebruik je om gegevens op te halen van de server. Als je de URL van een website in je browserbalk typt noem je dat een GET request.
Dit heb je als het goed is al gezien bij het inspecteren van een request:

![GET request](images/get.png)

--

In je PHP script is hiervoor een speciale variabele die ALTIJD beschikbaar is: `$_GET`. Deze variabele bevat een associatieve array (die ken je inmiddels)
De $_GET array bevat alle extra parameters die je aan een URL kunt meegeven.

Deze URL: `http://localhost/script.php?stad=Amsterdam&temperatuur=23` bevat 2 *GET parameters*: `stad` en `temperatuur`.

Via de $_GET variabele kun je in `script.php` de value uitlezen voor elke parameter:

```php
// http://localhost/script.php?stad=Amsterdam&temperatuur=23
echo $_GET['stad'];  // Er komt "Amsterdam" op het scherm
echo $_GET['temperatuur']; // Er komt "23" op het scherm
?>
```

**Via de URL kun je een script op die manier input geven!**

---

### Opdracht 1 - Gegevens uit de URL lezen via $_GET
{: .text-blue-100 .fs-6 }

- [Lees hier nog eens goed door](https://www.w3schools.com/php/php_superglobals_get.asp) hoe je die `$_GET` gegevens kunt uitlezen.
- Maak eerst twee bestanden `vraag.html` en `antwoord.php`
- Maak in `vraag.html` een HTML-document met dexe link:

```html
<a href="antwoord.php?leeftijd=17&opleiding=SD">Toon gegevens</a>
```

- Lees de `leeftdij` en `opleiding` GET-parameters in `antwoord.php` uit via de `$_GET` variabele.
- Ze de gegevens op het scherm.
- Extra: Voeg een tweede link toe in `vraag.html` naar `antwoord.php` met andere GET-parameters.

Tip: Gebruik `print_r($_GET);` om te kijken wat er in de `$_GET` array variabele zit.

---

### Opdracht 2 - De GET-input gebruiken om een temperatuur om te rekenen
{: .text-blue-100 .fs-6 }

- Maak een bestand: `fahrenheit.php`
- Voeg nu een link toe aan `vraag.html`

```html 
<a href="fahrenheit.php?celsius=25">25 graden Celsius naar Fahrenheit omreken</a>
```
 
- Pak je berekening van celsius naar fahrenheit uit les 2 er bij
- Lees de waarde van `celsius` uit via `$_GET` en zet de waarde in een variabele `$input`
- De variabele is nog string (en geen getal)
- Gebruik nu `$celsius = floatval($input)` om er een float van te maken.
- Bereken nu de temperatuur in fahrenheit en zet op een duidelijke manier op het scherm wat de temperatuur in celsius is en de temperatuur in fahrenheit
- Voeg nog wat links toe naar `fahrenheit.php` maar met andere waarden voor de celsius parameter
- Verander in de URL van je browser de waarde van `celsius` in een andere temperatuur. Verandert de output?

![Celsius Fahrenheit](images/celsius-fahrenheit.gif)

Je hebt nu één script gemaakt die verschillende Celsius temperaturen kan omrekenen naar Fahrenheit.

---

Links:

- [De superglobal variabelen in PHP](https://www.php.net/manual/en/language.variables.superglobals.php)
