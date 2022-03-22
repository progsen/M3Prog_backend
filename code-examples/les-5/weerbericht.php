<?php
$temperaturen = [
  "maandag" => 25,
  "dinsdag" => 23
];

$dag = $_GET['dag'];

echo "De temperatuur op " . $dag . ' is ' . $temperaturen[$dag];
?>

