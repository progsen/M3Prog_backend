<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$pokemons = ['Elgyem', 'Luvdisc', 'Rhyhorn', 'Gholbat', 'Drednaw'];
$images = [
    'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/605.png', 
    'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/370.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/111.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/042.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/834.png',
  ];

for($i=0; $i < count($pokemons); $i++){
  echo '<h1>' . $pokemons[$i] , '</h1>';
  echo '<img src="' .$images[$i] .'">';
}
?>
</body>
</html>
