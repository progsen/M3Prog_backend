---
title: Client server
layout: page 
permalink: :path/:basename 
parent: Les 5 
nav_exclude: true
---

# Client - Server

- Een client (bijvoorbeeld een webbrowser) vraagt gegevens (zoals een webpagina) op bij een (web) server.
- Dit gebeurt via het HTTP-protocol
- Het HTTP-protocol is de "taal" waarmee de client en de server communiceren.

Heel veel (vrij technische) documentatie over [het HTTP protocol](https://developer.mozilla.org/en-US/docs/Web/HTTP){: target="_blank"} vind je op de Mozilla Developers Network website.


### Opdracht 1 - De web inspector gebruiken om een HTTP request te inspecteren 
{: .text-blue-100 .fs-6 }

- Open de web inspector van je webbrowser
- Selecteer het Netwerk panel van de web inspector
- Open je webbrowser en ga naar een willekeurige website (je mag zelf weten welke)
- Kijk welke "requests" er allemaal gedaan worden voor deze ene webpagina
- Klik op een request aan de linkerkant (er klapt nu een panel open aan de rechterkant) zoals in deze afbeelding
- Hiermee kun je alles bekijken wat er NAAR de server wordt verstuurd.

![Web inspector](images/web-inspector.png)

---

**Maak een screenshot (zoals hierboven) met daarin zichtbaar:**

- De lijst met alle requests
- De verzoek (request) headers

**Inspecteer nu eerst alle **verzoek headers** (request headers):**

![Request headers](images/request-headers.png)

Maak een Markdown document: `request.md`. Zoek van minimaal 3 requests uit de lijst deze gegevens op en schrijf ze in je document:

1. De volledige URL die is opgevraagd
2. De request method (verzoek method in het Nederlands)
3. De status code (3-cijferig getal) 
4. [Zoek hier op](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status) bij welke van de 5 categorieën codes deze code hoort.
5. In welke request header staat de informatie over je webbrowser en systeem?

---

### Opdracht 2 - De web inspector gebruiken om een HTTP response te inspecteren
{: .text-blue-100 .fs-6 }

Hetzelfde kun je ook doen voor de **response headers** (koppen van reacties). Deze bevatten het ANTWOORD van de server.

- Ga naar een **andere website** met je web inspector open (anders even de website reloaden zodat de lijst weer wordt gevuld)
- Zorg dat je de Netwerk tab open hebt en dat je filter op "Document" om alleen webpagina requests te zien.
- Klik nu aan de linkerkant op de hoofd request regel (dit is de pagina die je opvraagt).

![Response headers](images/response-headers.png)
 
**Maak nu een nieuw markdown document:** `response.md`

Kijk naar *response headers* (Koppen van reacties) en schrijf op in je Markdown document:

1. Wat staat er in de `content-type` header van deze pagina?
2. Wat staat er in de `date` header?
3. Wanneer is het document voor het laatst aangepast?

Maak een screenshot van deze gegevens (zoals in het voorbeeld) en zet deze bij je markdown document.

---

Je hebt nu geoefend met het inspecteren van een **request** (het verzoek wat de client stuurde) en een **response** (antwoord wat de  webserver terug stuurde). Zoals je ziet worden er flink wat meer gegevens doorgegeven dan alleen de HTML en CSS.
{: .text-blue-100 .fs-4 }

**Waarom doe je dit?** Als er iets mis gaat bij het laden van jouw webpagina of PHP -script kun je hiermee veel informatie vinden over wat er mogelijk fout ging en welke gegevens er heen en weer worden gestuurd. Gebruik de web inspector dus om fouten op te sporen en requests en responses te inspecteren!
{: .text-green-100 .fs-4 }
