---
title: Een form gebruiken voor input
layout: page 
permalink: :path/:basename 
parent: Les 8
nav_exclude: true
---

# Een formulier gebruiken als input voor je script 

Je gaat nu een formulier toevoegen waarmee de bezoeker via jouw php site de api kan aanroepen
> bijvoorbeeld:
> je kan een pokemon opzoeken

Die gegevens gebruik je vervolgens om in je API aanroep.

In mijn voorbeeld ga ik de gebruiker laten kiezen wat voor type activiteit getoond moet worden

https://www.youtube.com/watch?v=nYSJS4yZx68

---

### Opdracht 3

- Maak een formulier en gebruik de gegevens uit het form in de aanroep van jouw API
- Zorgt dat het form de POST method gebruikt
- Lees de gegevens uit via $_POST
- Gebruik een `if` en de waarde van `$_SERVER['REQUEST_METHOD']`  om te controleren of het formulier is opgestuurd via de POST methode.
- Roep vervolgens de API aan met de input uit het formulier en toon het resultaat op het scherm.
