
# Json

- lees:
    ```
    json hebben we al eerder gebruikt, maar nu we associative arrays kennen kunnen we makkelijk json maken
    ```

## verbruik

- Maak een nieuwe bestand:
  - `assocjson.php`
    - in de directory `public/07`

- zet daar je $verbruik associative array uit `associatief.php` in

- zet nu daar de volgende code in:
    > ![](img/tojson.PNG)
- test:
    > ![](img/json.PNG)


## meer json

- kopieer je andere arrays ook in dit bestand
    - $weer
    - $persoon
    - $trophiesPerGame 
- zet die ook op het scherm met code zoals je met verbuik gedaan hebt

## test?

- test:
    > ![](img/error.PNG)

- oof dit werkt niet?
    - waarom:
    ```
    we zetten nu meerder json onder elkaar, dat is geen valide json
    - json mag alleen beginnen met 1 object (zoals $verbruik)
    - OF een array met objecten daarin
    ```
## oplossen

- nieuwe array!:
    - maak deze code, en zet ALLEEN die op het scherm
        > ![](img/jsonarray.PNG)
    - test!
        > ![](img/vreemd.PNG)

## index?

- indexen met verschillende objecten voelt nog verkeerd
    - dus maak er een associative array van:
        > ![](img/jsonassoc.PNG)


## klaar
- commit alles naar je github