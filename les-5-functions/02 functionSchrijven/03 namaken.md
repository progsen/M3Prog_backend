## oefenenen


- maak een nieuwe file:
    - `nagemaakt.php`
        - in de directory `public/05`


## eigen print function

- lees:
    > om een nieuwe function te maken typen we eerst:
    > - `function`
    > - daarna de `naam` van de function, bv: mijnFunction
    > - dan de argument haakjes `()`
    > - en als laatst de body haakjes `{}`  
    > zoals hieronder:
    ```php
    function mijnFunction()
    {
        //hier komt de code van de function
    }
    ```

- kopieer de code hierboven en verander de naam naar:
    - `mijnPrint`
- zet tussen de `{}`:
    >![](../img/mijnprint.PNG)
    > - dus in de body!!


## Gebruiken

- test nu de nieuwe function:
    - roep de function aan in je code
        
        >![](../img/call.PNG)
    - check je resultaat:
        >![](../img/mijnprintresult.PNG)

- gebruik de function nog 2 keer:
    >![](../img/mijnprintresult2.PNG)

## Nuttig?

- lees:
    > - deze function is niet heel nuttig
    >   - omdat deze function altijd hetzelfde doet
    >   - en wat de function doet is niet nuttig
    >       - een sla bestand op function is bijvoorbeeld WEL nuttig
    > - vaak dit soort functions iets nodig tussen de `()`
    >      - dat heet een argument

- kijk naar dit plaatje van print:
    >![](../img/print.PNG)
    - zie je hoe we tussen de `()` zetten WAT we willen printen?
        - zet tussen de `()` van mijnPrint:
            - $printText
                >![](../img/printtext.PNG)
            - vervang "dit wordt mijn print" door:
                - $printText
                    > hier gebruiken we dus het argument

## TEST!

- test je php pagina:
    >![](../img/error.PNG)
    - oops, dat klopt nog niet
        - vraag 1) lees de fout en bedenk je WAAROM het fout gaat, schrijf dit in commentaar in je code

## verbeteren:

- pas je code aan:
    >![](../img/regels.PNG)
- test en je krijgt:
    >![](../img/regels2.PNG)

- zet nu je antwoord op vraag 1 OOK op het scherm
    >![](../img/antwoord.PNG)

## variable meegeven aan function

- lees:
    > - nu geven we elke keer een string mee
    > - we kunnen ook direct een variable meegeven
    >   - dan gebruikt de function de waarde van die variable
    >       - dit hebben we eerder gedaan met print:
    >           ![](../img/print.PNG)

- maak nu een variable:
    - dezeGaatMee
        - met waarde:
            - "deze waarde wordt meegenomen"
- gebruik mijnPrint om deze op het scherm te zetten:
    > ![](../img/dezewaarde.PNG)


## klaar
- commit alles naar je github
