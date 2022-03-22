---
title: POST form
layout: page 
permalink: :path/:basename 
parent: Les 5 
nav_exclude: true
---

# POST methode gebruiken

![Get vs POST](images/get-vs-post.png)

De `GET` method is handig, maar is niet altijd een veilige keuze. De verstuurde gegevens zijn namelijk zichtbaar in de URL. Niet zo fijn als je wachtwoord in de URL staat en iemand je browser history bekijkt :-(

Met de HTTP POST-methode stuur je gegevens NAAR de server. Dit gebruik je als je een ingevuld formulier opstuurt naar de server.

Hieronder staat een simpel formulier in HTML

```php
<form action="verwerk.php" method="POST">
  <label>Wat is je voornaam?</label>
  <input type="text" name="voornaam">
  <button type="submit">Opsturen</button>
</form>
```

- In het `action` attribuut zet je de naam van het PHP-bestand waar de gegevens naartoe gestuurd moeten worden.
- De `method` zet je op `POST` (als je er `GET` van maakt... waar zie je gegevens dan, denk je?)
- De `name` van de input.
- Er MOET een submit knop zijn, deze verstuurt het formulier.

In het voorbeeld formulier wordt de ingevoerde voornaam doorgestuurd met als `name`: `voornaam`.

Voor het uitlezen van POST gegevens is er de speciale `$_POST` variabele in PHP.
{: .text-green-200 .fs-5 }

In `verwerk.php` (daar worden de gegevens van dit formulier heen gestuurd) kun je de `$_POST` array uitlezen:

```php
  // Zo toont je wat je hebt ingevuld in de input met name="voornaam"
  echo $_POST['voornaam']; 
```

---

### Opdracht 1 - Stuur een formulier op via de POST-methode 
{: .text-blue-100 .fs-6 }

Je gaat nu een formulier maken en opsturen met de POST methode naar een PHP-script op de server. Je probeert ook wat verschillende form velden uit.

- Maak bijvoorbeeld een formulier om het weerbericht in te voeren.
- Welke invoer heb je nodig, en welke formulier velden zijn daar geschikt voor?

[Hier vind je allerlei soorten input velden en voorbeelden](https://www.w3schools.com/html/html_forms.asp)

- Maak een bestand `formulier.html` met een HTML-structuur en een `<form>` in de `<body>`.
- Maak een tweede bestand `verwerk.php`.
- Stel de `action` van je form in naar `verwerk.php` en gebruik `POST` als `method`.
- Voeg minstens 3 verschillende soorten formulier velden toe aan je formulier
  - Bijvoorbeeld een tekst veld een date veld, of een select (dropdown menu) met options? (kies zelf)
- Geef elke input een duidelijke label met instructies ([gebruik CSS voor opmaak van je form](https://www.w3schools.com/css/css_form.asp))
- Geef elke input een `name` attribuut met een duidelijke naam (kleine letters geen spaties!)
- Voeg een [submit button](https://html.com/attributes/button-type/) toe (om het formulier op te sturen)
- Lees nu in `verwerk.php` de gegevens uit de `$_POST` array 
- Gebruik  de `name` van het invoerveld hiervoor
- Vul het formulier in en stuur het formulier op en kijk of je bij `verwerk.php` aankomt.
- Zet de ingevoerde gegevens mooi op het scherm.

Tip: Gebruik `print_r($_POST)` om inhoud van de hele `$_POST` array op het scherm te zetten.

---

In de volgende les gaan we al deze kennis gebruiken om een formulier te programmeren die gegevens in een database opslaat.
Je werkt dan toe naar een script dat weersvoorspelling, apparaat verbruik levert voor weergave op je dashboard.

- Of een script dat de invoer van je dashboard in KwH omrekent naar een bedrag in Euro?
- Of een script dat de naam van een stad doorkrijgt vanaf je dashboard en die de weersvoorspelling toont?
- ...

---

Links / tutorials:

- [Alles over forms](https://developer.mozilla.org/en-US/docs/Learn/Forms)
- [Your first form](https://developer.mozilla.org/en-US/docs/Learn/Forms/Your_first_form)
 
