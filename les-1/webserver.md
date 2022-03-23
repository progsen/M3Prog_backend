---
title: De code beschikbaar maken via je webserver
layout: page
permalink: :path/:basename
parent: Les 1
nav_exclude: true
---

# 04 - De map beschikbaar maken via je webserver

Je hebt nu een webserver geïnstalleerd met de programmeertaal PHP er bij.  
Als de webserver is opgestart kun je naar http://localhost gaan, en zie je de start pagina.

- De **start** van je website is de map `htdocs` in de XAMPP folder. 
- Om de opdrachten goed te kunnen uitvoeren moet daarom de repository/map van elke les IN de map `htdocs` van je XAMPP server zetten.

Zorg er dus NU voor dat de map voor deze week IN de `htdocs` folder staat.

## Testen of het werkt

Heb je in de map `htdocs` een map `les-1` en daarin een bestand `hello.php` dan wordt de url: `http://localhost/les-1/hello.php`

### Maak een nieuw PHP bestand en vraag hem op via localhost

- Zorg dat de repository voor deze week in de `htdocs` map staat.
- Maak nu een nieuw bestand `test.php`

PHP en HTML kun je samen gebruiken. Dat maakt het heel krachtig omdat je zo dynamische code (PHP) kunt mixen
met gewone HTML-code.

Zet onderstaande code in het `test.php` bestand en vraag het bestand op in je browser via de juiste http://localhost url.

```php
<!doctype html>
<head>
<title><?php echo "Titel van de pagina" ?></title>
</head>
<body>
    <h2>De datum vandaag is: <?php echo date('d-m-Y')?>, en de tijd is <?php echo date("H:i")?> uur.
    <p>Tellen kan ook:</p>
    <ol> 
    <?php for($i=0; $i < 100; $i++):?>
        <li><?php echo $i; ?></li>
    <?php endfor;?>
    </ol>
</body>
</html>
```

**Maak een screenshot van de uitvoer**



 



