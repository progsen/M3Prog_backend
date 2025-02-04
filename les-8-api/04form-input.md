

# Een formulier gebruiken als input voor je script 

Je gaat nu een formulier toevoegen waarmee de bezoeker via jouw php site een api kan aanroepen
> bijvoorbeeld:
> je kan een pokemon opzoeken

Die gegevens gebruik je vervolgens om in je API aanroep.

In dit voorbeeld kan je zien hoe je een gebruiker kan laten kiezen wat voor type activiteit getoond moet worden

> `let op` 
> - dit is voor de uitleg!
> - je `kan` het nadoen, maar dit `telt` dan `niet` als deze opdracht

https://www.youtube.com/watch?v=nYSJS4yZx68

### Opdracht

- Maak een `formulier` en gebruik de gegevens uit het form in de aanroep van jouw `API`
- Zorgt dat het form de `POST` method gebruikt
- Lees de gegevens uit via `$_POST`
- Gebruik een `if` en de waarde van `$_SERVER['REQUEST_METHOD']`  om te controleren of het formulier is opgestuurd via de POST methode.
- Roep vervolgens de API aan met de input uit het formulier en toon het resultaat op het scherm.
