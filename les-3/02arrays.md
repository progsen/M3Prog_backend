
## Toepassings opdrachten

**Belangrijk bij deze opdrachten is dat je de [PHP-documentatie](https://www.php.net/manual/en/ref.array.php) leest zodat je weet hoe je bepaalde functies moet gebruiken!**

*Zet ook comments in je code, met uitleg over wat de code doet*

- Maak eerst een nieuw bestand `arrays.php` met een HTML start structuur. 
    - in de directory `public/03`
    - visual studio code:
        - type `!`, kies de bovenste optie
- Vraag het bestand op via `localhost:88` in je browser 
    - dit is nu dus een lege webpagina



- Zet een start en eind PHP tag binnen:
    - de `<body>HIER DUS</body>` van je HTML-document
- Declareer een variabele `$namen`
    - maak daar `array` van met:
        - minstens `5 namen` van je `favoriete characters`

- Gebruik `echo` en `count()` om het aantal namen in de variabele `$namen` op het scherm te zetten 
    - gebruik ook `<br>` om de regels netjes onder elkaar te krijgen
- Sorteer de array met `sort()` 
    > (let op deze functie geeft niets terug maar verandert de array direct)
- Gebruik `print_r()` om de `$namen` array op het scherm te "dumpen"
- Haal de laatste naam op met `array_pop()` en zet deze op het scherm;
- Voeg een `nieuwe` naam toe met `array_push()`
- Gebruik weer `print_r()` om de `$namen` array op het scherm te "dumpen"
- Maak een nieuwe variabele `$namen_tekst`
    - Gebruik de `implode()` met `<br>` als separator en zet het resultaat in `$namen_tekst`
    
- echo `$namen_tekst` op het scherm. Wat is er gebeurd?
- Nu andersom: Gebruik `explode()` om deze tekst naar een array om te zetten (sla het resultaat op in een nieuwe variabele)
- Gebruik nu weer `print_r()` om te zien wat er in de nieuwe variabele zit.


**Tip**: Om nieuwe regels in HTML te krijgen moet je dus ook een `<br>` toevoegen aan de `echo`, anders komt alles achter elkaar op het scherm

## klaar
- commit alles naar je github
