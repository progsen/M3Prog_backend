---
title: Wat is een API?
layout: page 
permalink: :path/:basename 
parent: Les 8
nav_exclude: true
---

# Wat is een API?

API (ee-pi-ai) is de afkorting voor Application Programming Interface. Met aan API kunnen twee systemen gestructureerd gegevens uitwisselen.
Denk aan jouw website die het weerbericht ophaalt via een Weather API. Of jouw website die een routebeschrijving ophaalt vanaf de Google Maps server.
Veel grote websites bieden een API aan, zodat developers (zoals jij) met de API mooie websites of applicaties kunnen programmeren.

Ze bieden jou toegang tot hun gegevens en diensten. Zij hebben de gegevens en jij hebt de skills om de gegevens te gebruiken in jouw code.

---

### JSON 
{: .text-blue-100 .fs-6 }

De meeste moderne API's gebruiken het JSON-formaat om gegevens uit te wisselen. Dit heb je bij het gebruiken van de weerbericht API al gezien, en ook in de vorige lessen.
JSON kun je in de meeste programmeertalen makkelijk omzetten naar een handig datatype, zoals een object of een array.

In PHP gebruik je de function `json_decode()` om de JSON (nu is dat nog tekst) om te zetten naar een array.

Deze (fun) API voorspelt jouw leeftijd aan de hand van je naam.
De API kun je aanroepen met de `GET` parameter `name` met daarin je naam:

[https://api.agify.io/?name=Hidde](https://api.agify.io/?name=Hidde)

Dit is de uitvoer van de API aanroep (dit is in JSON)

```json
{
"name": "Hidde",
"age": 28,
"count": 192
}
```
Deze JSON tekst kun je vervolgens omzetten in een associatieve array in PHP met `json_decde()`:

Voorbeeld:
```php
$json_text = '{"name": "Hidde","age": 28,"count": 192}';
$data = json_decode($json_text, true);  // De true als tweede parameter zorgt ervoor dat er een array van gemaakt wordt
```

In `$data` zit nu dus een array en je kunt de `age` nu tonen als volgt:

```php
echo $data['age'];
// Dit toont het getal 39 op het scherm
```

---

### Een API kiezen
{: .text-blue-100 .fs-6 }

Ga naar deze pagina: [https://developer.vonage.com/blog/2021/03/15/the-ultimate-list-of-fun-apis-for-your-next-coding-project](https://developer.vonage.com/blog/2021/03/15/the-ultimate-list-of-fun-apis-for-your-next-coding-project). 

Hier staan een heleboel gratis API's die je kunt gebruiken. Sommige zijn nogal onzinnig, maar zijn prima om te gebruiken om code te oefenen.

Let op, sommige API's kun je alleen met een API-key gebruiken, hiervoor moet je je registreren. Kies daarom één van onderstaande API's om mee te oefenen:

- Bored API (deze ga ik gebruiken in mijn les en video's)
- REST Countries
- Pokemon API
- Kanye Rest API




 












