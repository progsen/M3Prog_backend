
## Eigen array

- maak een nieuwe file:
    - `jsoninphp.php`
        - in de directory `public/06`


## Json header

- lees:
    > als wij json als php resultaat willen teruggeven moeten we een aantal stappen doorlopen:
    > - zet de httpresponse `Content-Type` header op:
    >   - `application/json`
    > - echo of print een string:
    >   - welke als json gelezen kan worden


- laten we een begin maken:
    - we zetten de header even als eerst:
        > ![](img/header.png)


## test

- open jsoninphp.php
    - een leeg scherm? dat klopt
        - maar open even de network debugger:
            > ![](img/jsonnetwork.png)
        - zie je dat daar nu json staat?

## geen header

- zet de header even in commentaar
- test nogmaals met de network debugger
    > ![](img/html.png)


## iets meer sturen

- laten we nu string die als json gelezen kan worden:
    - maak een variable:
        - steden
            - geef deze de waarde:
                > ![](img/stedenstring.png)

## echo!

- echo nu de steden variable
    - NA de header te zetten

## Test

- test:
    - nu ziet je browser dit als json:
        > ![](img/alsjson.png)
    - haal nog eens de header weg en test:
        > ![](img/nojson.png)

    
## klaar
- commit alles naar je github
