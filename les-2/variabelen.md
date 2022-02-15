---
title: Naamgeving van variabelen 
layout: page 
permalink: :path/:basename 
parent: Les 2 
nav_exclude: true
---

#  Variabelen de juiste naam geven

Een variabele in PHP begint altijd met een dollar-teken: `$` en daarna meteen de naam van de variabele:

```php
<?php
    $temperatuur = 25.6;
    $stad = "Amsterdam";
    $regen = "3mm";
?>
```

### Welke naamgeving werkt wel en welke niet?

{: .text-blue-100 .fs-6 }

Sommige namen voor variabelen zijn NIET geldig in PHP. Dat ga je nu zelf uitzoeken.

- Maak een nieuw bestand `variabelen.php`;
- Declareer nu de volgende variabelen één voor één met een waarde (mag je zelf iets voor verzinnen)
- Gebruik `echo $variabele;` en kijk of het werkt.
- Werkt het niet zet dan `//` voor die regel zodat PHP die regel overslaat, en ga verder met de volgende naam

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

Hier vind je meer info over naamgeving van variabelen in PHP:
[https://www.php.net/manual/en/language.variables.basics.php](https://www.php.net/manual/en/language.variables.basics.php)

