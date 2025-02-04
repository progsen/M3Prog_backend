# UITLEG Functions schrijven

> Vaak gebruik je bepaalde code op meerdere plekken. Dubbele code wil je > *absoluut* voorkomen, dat zorgt voor vreemde bugs en dezelfde code op > meerdere plekken aanpassen is niet wenselijk.
> 
> Daarom gebruik je een `function` die de code bevat die je vaker wilt > gebruiken. Zorg dat de function één ding doet en dus verantwoordelijk is > voor één taak.
> Je kunt de function zo vanaf verschillende plekken in je code uitvoeren.  Wil je iets aan de werking van de function veranderen dan hoeft dat maar  op één plek, in de function!

> #### Hoe schrijf je zelf een function in PHP?
> 
> - Een function begint altijd met het woord `function` en daarna de naam  van de function (die duidelijk zegt wat de function doet). 
> - Gebruik het liefst kleine letters voor de function naam. Er zijn > verschillende code conventies, elke developer heeft eigen voorkeuren (werk  je in een team dan zul je hierover afspraken moeten maken om de code > consistent en leesbaar te houden).
> - Pas op dat je geen function maakt die dezelfde naam heeft als een ingebouwde PHP functions (zoals bijvoorbeeld `strlen()`). 

```php
// Voorbeeld van een function met de naam current_date die de datum op het scherm zet

function currentDateTime(){
    // Toont de huidige datum en tijd met uren, minuten en seconden
    echo date('d-m-Y H:i:s');
}
```

Zo roep je de function aan:

```php
currentDateTime(); // 03-09-2022 10:22:45

```

## Functions in een apart bestand plaatsen

> - Het is handig om veelgebruikte functions in een `apart` PHP-bestand te zetten
> - dat bestand kan je dan met `include <naam van php bestand>` of `require <naam van php bestand>` in laden in een ander PHP-bestand die de functions nodig heeft.  
>- Je haalt `jouw functions` op die manier `binnen` in het `andere` PHP-bestand, zodat dit PHP-bestand er gebruik van kan maken. Je maakt dan als het ware een `code bibliotheek`` met functions die je kunt inladen als je ze nodig hebt.

### Opdracht 1

- Maak 2 nieuwe bestanden:
    - `functions.php` 
    - `script.php`
    - in de directory `public/04`
- Zet de function `currentDateTime()` die hierboven staat in het bestand `functions.php`
- Zet ook de function `add()` (hieronder te zien) in `functions.php`

```php
function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}
?>
```

- Voeg nu zelf 3 functions toe aan `functions.php` voor:
    - `subtract()`
        - zorg dat deze function `2` getallen `van elkaar afhaalt` en `returned` het resultaat
    - `divide()`
        - zorg dat deze function `2` getallen `deeld` en `returned` het resultaat
    - `multiply()` 
        - zorg dat deze function `2` getallen `vermenigvuldigd` en `returned` het resultaat

### Opdracht 2

- Laad in `script.php` het bestand `functions.php`
    > - hint: dit doe je met `include_once`.
- Roep nu alle functions minstens `één keer` aan
    - Zet het resultaat van elke function aanroep op het scherm met `echo`



## klaar
- commit alles naar je github


