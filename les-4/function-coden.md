---
title: Function schrijven
layout: page 
permalink: :path/:basename 
parent: Les 4 
nav_exclude: true
---

# Nu zelf oefenen en een function schrijven

Je hebt nu flink wat info en voorbeelden hoe je functions zelf kunt schrijven

### Opdracht 1 - Schrijf een function voor het berekenen van vliegkosten
{: .text-blue-100 .fs-6 }

![Vliegkosten](images/vliegkosten.png)

Voeg nu een function aan `functions.php` toe die de retour prijs berekent (dus heen en terugreis samen) voor een vliegreis.

**De function moet deze input argumenten/parameters gebruiken:**

- Afstand in kilometers
- Prijs voor een liter kerosine
- Hoeveel kilo bagage er mee gaat
- Of je business class of economy class reist

**De berekening moet als volgt plaatsvinden:**

- De kosten voor de reis bereken je door de kerosine prijs x het totaal aantal kilometers te doen, en daarna te delen door 30
- Voor elke kilo bagage tel je 5 euro op bij de kosten
- Reis je business class dan wordt de totaalprijs nog eens vermenigvuldigd met 1.5 (champagne en kaviaar zijn duur!)

[Lees het stappenplan](function-params.md) en probeer stap voor stap de function te bedenken en te schrijven.

---

### Opdracht 2 - Gebruik de function en bereken kosten
{: .text-blue-100 .fs-6 }

![Berekenen](images/calculate.png)

- Maak een bestand `vliegkosten.php` en laadt met `include` je `functions.php` in.
- Test je function uit door hem aan te roepen in `vliegkosten.php`

**Bereken nu de kosten door jouw eigen function te gebruiken**

- Vliegreis van 3722 km, Kerosine prijs 2.05, Bagage 20 kilo, Economy class
- Vliegreis van 9276 km, Kerosine prijs 3.11, Bagage 10 kilo, Economy class
- Vliegreis van 803 km, Kerosine prijs 2.83, Geen bagage, Business class

Ze het resultaat op het scherm met `number_format()` en zet een € teken voor de kosten.

Vraag de pagina op via localhost, maak een screenshot als bewijs.  Probeer wat kleuren of stijlen toe te voegen met CSS zodat het er prettig uit ziet.

