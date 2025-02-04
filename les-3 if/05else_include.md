
## nieuwe file
- Maak een nieuw bestand:
    - `incHtml.php` 
        - in de directory `public/03`
- maak ook 2 html bestanden in een views folder
    >![](img/views.PNG)


## html

- maak eens standaard html in je incHtml.php
    >![](img/standaardhtml.PNG)


- maak boven in de file een nieuwe variabel:
    - loggedIn
    - met waarde false
    > vergeet je php tag niet


- zet daar een stuk phpcode in je html:
    >![](img/phpinhtml.PNG)

- maak daar een if else in 
    - in de if test je of loggedIn true is

## include

- in de body van de if zet je:
    >![](img/mydash.PNG)
- in de else:
    >![](img/home.PNG)

## views

- open `home.html`
    - zet daar een button in met tekst login
        >![](img/login.PNG)

- open `myDashboard.html`
    - maak het volgende na in die html:
        >![](img/skill.PNG)

## test

- test nu wat je ziet als je $loggedIn veranderd:
    - true:
        > ![](img/skill.PNG)
    - false:
        > ![](img/login.PNG)


## dynamisch

- pas $loggedIn aan:
    > ![](img/get.PNG)  
    > de uitleg over $_GET komt later

- open `home.html`
    - haal alles weg
        - zet daar nu dit in:
            > ![](img/link.PNG)  

## test

- open je pagina
    - test wat er gebeurt als je op de LogIn link clickt
        > ![](img/loginlink.PNG)  

## klaar
- commit alles naar je github
