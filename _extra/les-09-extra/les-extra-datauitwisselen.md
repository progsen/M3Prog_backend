##

vaak zullen verschillende partijen data moeten uitwisselen.
> denk bijvoorbeeld aan ziekenhuisen en huisartsen

laten wij dat eens gaan proberen te doen

#### tweetallen

- we maken tweetallen.
    - beslis wie student A is en wie student B is
- we werken via de ma-cloud

#### php opzetten

##### student A:

- maak een `doorverwijzing.php`
    - maak een form:
        - zorg ervoor dat deze een knop heeft:
            - `verwijs door` 
        - maak ook een textveld met id en naam:
            - `patientnummer`
        - maak ook een textveld met id en naam:
            - `doorverwijsgegevens`
        - als action gebruik je de `ziekenhuisafspraak.php` van je groepsgenoot

##### student B:
- maak een `ziekenhuisafspraak.php`
    - deze haalt het `patientnummer` uit de `$_GET` 
        - en laat deze zien in een `h1` tag
    - deze haalt de `doorverwijsgegevens` uit de `$_GET` 
        - en laat deze zien in een `article` tag
        - met de boodschap:
            - `doorverwijzing ontvangen`

#### testen

- zet `doorverwijzing.php` op de *macloud* van student A
- zet `ziekenhuisafspraak.php` op de *macloud* van student B
- test of het werkt


#### andersom

##### student A:
- maak een `huisarts.php`
    - deze haalt het `patientnummer` uit de `$_GET` 
        - en laat deze zien in een `h1` tag
    - deze haalt de `uitslag` uit de `$_GET` 
        - en laat deze zien in een `section` tag
        - met de boodschap:
            - `uitslag verwerkt`


##### student B:
- maak een `ziekenhuis.php`
    - maak een form:
        - zorg ervoor dat deze een knop heeft:
            - `stuur uitslag` 
        - maak ook een textveld met id en naam:
            - `patientnummer`
        - maak ook een textveld met id en naam:
            - `uitslag`
        - als action gebruik je de `huisarts.php` van je groepsgenoot

#### testen

- zet `huisarts.php` op de *macloud* van student A
- zet `ziekenhuis.php` op de *macloud* van student B
- test of het werkt


### extra

- zorg ervoor dat `ziekenhuisafspraak.php`:
    - op de server een file aanmaakt:
        - met het `patientnummer` + `.txt` als filenaam
            - controlleer of het ook een nummer is! (tegen hacks)
        > voorbeeld:  
        > je stuurt patientnummer `89907` op dan krijg je dus `89907.txt` op de server
        - zet daar in positief of negatief in


- zorg ervoor dat `huisarts.php`:
    - op de server een file aanmaakt:
        - met het `patientnummer` + `-uitslag.txt` als filenaam
            - controlleer of het ook een nummer is! (tegen hacks)
        > voorbeeld:  
        > je stuurt patientnummer `89907` op dan krijg je dus `89907-uitslag.txt` op de server
        - zet daar de gekregen uitslag in

## klaar
- commit alles naar je github