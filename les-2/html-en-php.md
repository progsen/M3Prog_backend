---
title: PHP en HTML combineren
layout: page
permalink: :path/:basename
parent: Les 2
nav_exclude: true
---

# PHP en HTML combineren

De kracht van PHP is dat je het kunt combineren met HTML.

Wil je PHP-code schrijven die iets doet? Je opent een PHP tag, schrijft de PHP-code en sluit af met de eind PHP-tag.

**Je kunt op ELKE plek een PHP tag openen en iets in de HTML zetten!**

```php
<?php
$image = "https://www.amsterdamsdagblad.nl/image/1659_1747_1200_1200.jpg";
$titel = "Mediacollege Amsterdam";
?>
<h1><?php echo $titel; ?></h1>
<img src="<?php echo $image?>" alt="<?php echo $titel>" />
 ```

## Opdracht

- Maak een nieuw bestand `php-en-html.php`
- Maak een leeg HTML document met de juiste start code (in Visual Studio Code: `! + TAB`)
- Maak bovenin in een PHP blok 3 variabelen
  - Voor de titel van de pagina
  - Voor de URL naar een afbeelding van het internet
  - Voor de titel van de afbeelding
  - Met je eigen naam
- Gebruik echo om de **variabelen** op de juiste plek in de HTML uit te voeren met PHP.
- Gebruik de image url in een `<img>` tag.
- Gebruik de titel van de image in het `alt` en/of `title` attribuut van de `img` tag.
- Gebruik je naam in een `<h1>` of andere tag naar keuze.

Vraag de pagina op via localhost en kijk of de pagina uitvoer correct is.
Als het goed is wordt de afbeelding getoond en zie je de titel en je naam op de pagina.

**Maak een screenshot van de pagina op je `localhost` en zet deze er bij.**
