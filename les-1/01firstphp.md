---
title: Schrijf je eerste PHP script
layout: page
permalink: :path/:basename
parent: Les 1
nav_exclude: true
---

# 03 - Schrijf je eerste PHP script

- lees:
    > - De bestandsextensie voor PHP is `.php` (met kleine letters!)  
    > - Een PHP webpagina kun je ALLEEN uitvoeren via een webserver 
        > *DUS NIET VIA VISUAL STUDIO LIVE SERVER*
    > - Als de webserver een bestand met `.php` ziet wordt deze door PHP engine uitgevoerd.
    > - De uitvoer van het PHP script wordt daarna code van je webpagina
    > - Zo kun je dus gegevens verwerken of genereren op de server en het resultaat naar de webbrowser sturen


## PHP code schrijven

- lees:
> - Een PHP script begint ALTIJD met `<?php `
> - Een PHP script eindig je ALTIJD met `?>`
> - Tussen deze start- en eind PHP tags schrijf je PHP code
> - Zet je het NIET tussen deze PHP tags, dan doet PHP er niets mee!

- Maak een nieuw bestand: `hello.php` in je `public\01` directory:
    > ![](img/hello.PNG)
- Zet de juiste start en eind tags er in
- Zet tussen de start en eind tags deze code:

```php
echo "Hello World!";
```

## TESTEN

- Open je browser en ga naar:
    - [http://localhost:88/01/hello.php](http://localhost:88/01/hello.php)
- zie je nu hello world! staan?

## Nu zelf proberen

- Maak een nieuw PHP script: `its-me.php`.
    - in de directory `public/01`

- Schrijf nu zelf PHP-code en gebruik `echo` om je naam, klas en je studentnummer op het scherm te zetten.
- toon dit in de browser
    > Voorbeeld:  
    > ![](img/itsme.PNG)


## HTML 

- open je index.php
    - zet daar een echo in die `"<h1>Kopje</h1>"` echoed 
        - vergeet je ';' op het eind niet
        
- Open je browser en ga naar:
    - [http://localhost:88/01/index.php](http://localhost:88/01/index.php)
- zie je nu Kopje in grote letters staan?

- lees:
    > alles wat wij echoen wordt dus html, zo kunnen wij een website maken

## meer html

- ga verder in index.php
    - zet meer html op het scherm met echo's, denk aan p, img, section etc
        - minimaal 5 echo's!

        > ![](img/html.PNG)
- lees:
    > onze html is nu nog niet netjes (we hebben geen body etc) dat gaan we later beter doen
## klaar?

- commit alles naar je github
