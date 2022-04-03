---
title: JSON bestand inladen met Javascript
layout: page 
permalink: :path/:basename 
parent: Les 7
nav_exclude: true
---

# JSON-bestand inladen en in de Chart gebruiken

Het JSON bestand kun je nu inladen met `fetch()`. De chart moet dus ook pas gegenereert worden NADAT de data is ingeladen.
Je gaat dus een function maken die de chart maakt. Die function kun je aanroepen NADAT de JSON is ingeladen.
Deze function krijgt de gegevens door als argument, zodat die in de function gebruikt kunnen worden om de chart van de juiste data te voorzien (de datums en meterstanden)

---

### JSON-bestand met meterstanden laden en in de chart tonen
{: .text-blue-100 .fs-6 }

{% include youtube.md video="GAkxfJ4gTTY" %}

Kleine toevoeging. Op 1:55 in de video gebruik ik `response.json()` om de JSON die is geladen om te zetten naar een Javascript Object.
In de eerdere video gebruikte ik een voorbeeld met `JSON.parse()`. Deze twee manieren om JSON om te zetten in een Javascript Object doen hetzelfde ;-)
{: .fs-3 }

---

### Meer info over fetch en JSON
{: .text-green-100 .fs-3 }

- [JSON](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/JSON)
- [JavaScript Fetch API](https://www.javascripttutorial.net/javascript-fetch-api/)






