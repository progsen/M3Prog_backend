
## Spelen met docker

> Wat als er nou iets mis gaat? kan je de container starten en stoppen?
> Hoe makkelijk is het om een container opnieuw te maken?


## Stop

- Click op de `stop` knop van  `m3prog_project`
  > ![](img/stop.PNG)
- Open http://localhost:88 in de browser
  - die werkt nu niet


- lees: 
  > - Nu heb je `alles` gestopt
  > - In jouw project hangen `4 containers`

## starten!
- start nu alles weer:
  > ![](img/start.PNG)

- Open http://localhost:88 in de browser
  - die werkt nu wel

## 1 container stoppen
- stop nu 1 container de `nginx`:
  > ![](img/1stop.PNG)
  - Open http://localhost:88 in de browser
    - je krijgt nu geen resultaat, want je webserver is `down`

- start je `nginx` weer


## Container deleten

- druk nu op de `delete` knop van je project:
  > ![](img/delete.PNG)
  - controlleer of `m3prog_project` weg is:
  > ![](img/deleted.PNG)

- controlleer of je `index.php` nog op je hardeschijf staat:
  > ![](img/geenprobleem.PNG)
  > onze `files` hangen buiten de container dus `geen probleem` als je de container delete

## opnieuw maken

- maak de containers `opnieuw`:
  - gebruik `docker compose up`

- Open http://localhost:88 in de browser
    - je krijgt nu weer je index
    
  
## klaar?

- commit alles naar je github
