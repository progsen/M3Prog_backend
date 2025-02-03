

# Wat is een API?

API (ee-pi-ai) is de afkorting voor Application Programming Interface. Met aan API kunnen twee systemen gestructureerd gegevens uitwisselen.
Denk aan jouw website die het weerbericht ophaalt via een Weather API. Of jouw website die een routebeschrijving ophaalt vanaf de Google Maps server.
Veel grote websites bieden een API aan, zodat developers (zoals jij) met de API mooie websites of applicaties kunnen programmeren.

Ze bieden jou toegang tot hun gegevens en diensten. Zij hebben de gegevens en jij hebt de skills om de gegevens te gebruiken in jouw code.

### JSON 

> De meeste moderne API's gebruiken het JSON-formaat om gegevens uit te wisselen. Dit heb je bij het gebruiken van de weerbericht API al gezien, en ook in de vorige lessen.
JSON kun je in de meeste programmeertalen makkelijk omzetten naar een handig datatype, zoals een object of een array.
> 
> In PHP gebruik je de function `json_decode()` om de JSON (nu is dat nog tekst) om te zetten naar een array.

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


### Het voorbeeld proberen

- maak een nieuwe php file:
    - `raadleeftijd.php`
        - in de directory `public/08`

- gebruik de code hierboven in de voorbeelden om:
    - de api aan te roepen
    - de data te tonen

### testen

- open `raadleeftijd.php` in je browser en kijk of je de leeftijd ziet:
    > ![](img/leeftijd.PNG)


## klaar
- commit alles naar je github




 












