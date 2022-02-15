---
title: Zorgen dat je foutmeldingen ziet!
layout: page
permalink: :path/:basename
parent: Les 2
nav_exclude: true
---

# Zorgen dat je foutmeldingen ziet!

Het is belangrijk dat als je een programmeerfout maakt, dat je de foutmelding ook ziet op je scherm.
Dan kun je de foutmelding proberen te ontcijferen en een oplossing zoeken.


### Foutmeldingen instellen
{: .text-blue-100 .fs-6 }

- Zorg dat de webserver is opgestart.
- Ga naar de XAMPP pagina in je webbrowser en dan naar de PHP Info pagina.
- Zoek met CTRL+F op de pagina naar: "Loaded configuration file", deze heet `php.ini`.
- Dit is de plek van het PHP-instellingen bestand: `php.ini`.

### In het php.ini bestand staan alle instellingen voor PHP
{: .text-blue-100 .fs-6 }

- Open jouw `php.ini` bestand in Visual Studio Code
- Zoek naar `error_reporting` en zorg dat de `;` aan het begin van die regel weg is
- Zoek naar `display_errors`. Zorg dat deze op `On` staat.
- Haal geen dingen weg, maar zorg dat deze twee settings goed staan.
- Bewaar het `php.ini` bestand en **herstart de webserver**
- Reload de PHP Info pagina en kijk of de wijzigingen zijn doorgevoerd.

Dus in het `php.ini` bestand moeten deze twee instellingen zo staan ingesteld

```ini
error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT
display_errors=On
```

### Foutmelding testen
{: .text-blue-100 .fs-6 }

Je gaat nu expres een fout maken om te kijken of je nu een foutmelding krijgt te zien

- Maak een nieuw bestand: `foutje.php`
- Schrijf de start en eind PHP tags
- Zet daartussen deze code:

```php
echo "Dit is foute code omdat de quotes niet dezelfde zijn';
echo 100/0; // Hier wordt door nul gedeeld, dat is ook een fout!
```

Open dit bestand via je localhost, als het goed is zie je nu een foutmelding. 
Iets als: 

![Error](images/foutje.jpg)

**Maak een screenshot van jouw foutmelding en zet hem in je repository.**

Zo niet, controleer je `php.ini` instellingen.

Meer hulp vind je hier: [https://phoenixnap.com/kb/php-error-reporting](https://phoenixnap.com/kb/php-error-reporting)

