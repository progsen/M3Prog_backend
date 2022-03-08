<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
  <?php
  $apparaten = ['wasmachine' => 1000, 'koelkast' => 100, 'iphone' => 300];

  foreach($apparaten as $key => $value){
    echo '<li>' . $key . ' verbruikt ' . $value . ' KwH' . '</li>';
  }
  ?>
  </ul>

  <h1>Totaal</h1>
  <p>
  <?php
  $totaal = 0;
    foreach($apparaten as $key => $value){
    $totaal = $totaal + $value;
  }
  echo $totaal . ' KwH';
  ?>
  </p>

</body>
</html>
<?php
