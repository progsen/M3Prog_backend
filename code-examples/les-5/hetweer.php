<?php
$voorspelling = [
  "ma" => 20,
  "di" => 21,
  "wo" => 29,
  "do" => 19,
  "vr" => 24,
  "za" => 22,
  "zo" => 23
];

$dag = $_GET['dag'];
echo "De voorspelling voor " . $dag . " is " . $voorspelling[$dag] . "&deg; C.";
?>