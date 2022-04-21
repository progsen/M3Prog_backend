---
title: Extra opdracht
layout: page 
permalink: :path/:basename 
parent: Les Extra
nav_exclude: true
---

# Extra opdracht

**Haal eerst ALLE gekopieerde code uit je repository. Iemand anders zijn code inleveren is namelijk [plagiaat](https://nl.wikipedia.org/wiki/Plagiaat)**

###  Deel 1: Maak les 4 opnieuw, helemaal zelf!
{: .text-green-100 .fs-6 }

- Bij de vliegkosten opdracht: Gebruik **andere steden en afstanden**
- Schrijf in de comments, per regel wat de code doet. Wat gebeurt er precies?
- Schrijf ook met een code comment wat je nog niet snapt of moeilijk vindt.


## Deel 2:  Nieuwe opdracht (met als voorbeeld les 6)
{: .text-green-100 .fs-6 }

*Maak eerst les 6 en gebruik die als voorbeeld*

Maak een nieuwe map `les-extra` en zet daar de code en screengrabs in.


### Stap 1
{: .text-blue-100 .fs-6 }

- Maak in je MySQL/phpMyAdmin database een nieuwe table aan "plaatsen":
- Eerst maak je de structuur van de table (welke kolommen heb je nodig in de table?)

### Stap 2 - Database table maken met de juiste structuur
{: .text-blue-100 .fs-6 }

In de "plaatsen" table ga je plaatsen opslaan met per plaats:

  - De naam van de plaats
  - De bestandsnaam van een foto van de stad (eerst foto zoeken, en opslaan in je map)
  - Afstand in km vanaf Amsterdam
  - Gemiddelde temperatuur
  - Een beschrijving van de highlights van die stad
  - ... voeg zelf extra velden toe als je wilt
  
Kies de juiste datatypes. Gebruik Google en doe zelf research naar welke [soorten velden](https://www.mysqltutorial.org/mysql-data-types.aspx) je kunt gebruiken.

### Stap 3 - Gegevens invoeren
{: .text-blue-100 .fs-6 }

  - Maak een screenshot van de structuur en sla deze op in de map
  - Nu ga je via het tabje "Invoegen" (Insert) steden toevoegen
  - Voeg nu rijen minstens 10 steden doe met alle gegevens (bij bestandsnaam zet je dus de naam van het foto-bestand, bijvoorbeeld: "parijs.jpg")

### Stap 4 - De gegevens ophalen met PHP
{: .text-blue-100 .fs-6 }

Haal de gegevens op en zet ze op het scherm met PHP, HTML en CSS:

  - Maak een nieuwe PHP + HTML pagina
  - Maak verbinding met de database (zie les 6!)
  - Haal alle gegevens op uit de "steden" table en gebruik een loop om ze duidelijk op het scherm te zetten (gebruik CSS)
  - Gebruik de bestandsnaam van de foto om een `<img>` tag te maken met daarin de bestandsnaam uit de database in de `src=""`
  - Maak ook hier een screengrab van en zet hem in de map


**Gebruik les 6 als voorbeeld!**

---

Commit je code en push het naar Github en stuur mij een berichtje via Teams

Lever dit uiterlijk op 29 april in, in week 10 van Periode 3.









