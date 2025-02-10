
#  Variabelen de juiste naam geven

Een variabele in PHP begint altijd met een dollar-teken: `$` en daarna meteen de naam van de variabele:

```php
<?php
    $temperatuur = 25.6;
    $stad = "Amsterdam";
    $regen = "3mm";
?>
```

- hoeveel variabelen staan hierboven?

## Welke naamgeving werkt wel en welke niet?

> Sommige namen voor variabelen zijn NIET geldig in PHP. Dat ga je nu zelf uitzoeken.

- Maak een nieuw bestand:
    - `variabelennaam.php`;
        - in de directory `public/02`
- Declareer nu de `variabelen` uit de tabel hier onder één voor één met een `waarde` 
    > - je mag zelf de waarde verzinnen
    
| Variabele        | Is deze geldig? |
|:-----------------|:----------------|
| $auto2           | ?               |
| $_naam           | ?               |
| $auto's          | ?               | 
| $auto/onderdelen | ?               |
| $huis&tuin       | ?               |
| $naw             | ?               |
| $22              | ?               |
| $$auto           | ?               |
| $kleurVanAuto    | ?               |
| $software-dev    | ?               |

## TESTEN
- Gebruik `echo $variabele;` en:
    - kijk of het werkt
    - of dat je een fout krijgt.
        - Krijg je een fout? 
            - Zet dan `//` voor die regel zodat PHP die regel `overslaat`   
                > (*je maakt er commentaar*)
                ```php
                //$123getal = 3;
                ```
            - en `ga verder` met de volgende naam



## klaar
- commit alles naar je github

## INFO
Hier vind je meer info over naamgeving van variabelen in PHP:
https://www.php.net/manual/en/language.variables.basics.php

