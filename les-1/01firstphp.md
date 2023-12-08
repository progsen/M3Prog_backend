---
title: Schrijf je eerste PHP script
layout: page
permalink: :path/:basename
parent: Les 1
nav_exclude: true
---

# 03 - Schrijf je eerste PHP script

- De bestandsextensie voor PHP is `.php` (met kleine letters!)  
- Een PHP webpagina kun je ALLEEN uitvoeren via een webserver 
- Als de webserver een bestand met `.php` ziet wordt deze door PHP engine uitgevoerd.
- De uitvoer van het PHP script wordt daarna code van je webpagina
- Zo kun je dus gegevens verwerken of genereren op de server en het resultaat naar de webbrowser sturen


## PHP code schrijven

- Een PHP script begint ALTIJD met `<?php `
- Een PHP script eindig je ALTIJD met `?>`
- Tussen deze start- en eind PHP tags schrijf je PHP code
- Zet je het NIET tussen deze PHP tags, dan doet PHP er niets mee!

- Maak een nieuw bestand: `hello.php` in je `public` directory:
    > ![](img/hello.PNG)
- Zet de juiste start en eind tags er in
- Zet tussen de start en eind tags deze code:

```php
echo "Hello World!";
```

## TESTEN

- Open je browser en ga naar:
    - [http://localhost:88/hello.php](http://localhost:88/hello.php)

## Nu zelf proberen

- Maak een nieuw PHP script: `its-me.php`.
- Schrijf nu zelf PHP-code en gebruik `echo` om je naam, klas en je studentnummer op het scherm te zetten.
- toon dit in de browser
    > Voorbeeld:  
    > ![](img/itsme.PNG)
- Maak een `screenshot` van de output en zet deze in de directory:
    - `M3Prog/screenshots`
    - noem de file `itsme.png`


## klaar?

- commit alles naar je github
