<?php
function berekenRitKosten($afstand, $km_per_liter, $liter_prijs){

  // Hoeveel liter benzine heb je nodig?
  $aantal_liters = $afstand / $km_per_liter;

  // Kosten: aantal liter x literprijs
  $kosten_euro = $aantal_liters * $liter_prijs;  

  return $kosten_euro;

}


function berekenVliegKosten($afstand, $kerosine_prijs, $bagage, $business){

  // Kosten voor kerosine
  $kosten = ($afstand * $kerosine_prijs) / 30;

  // Bagage kosten
  $bagage_kosten = $bagage * 5;

  //Totaal kosten
  $totaal = $kosten + $bagage_kosten;

  // Als business "waar" is (true) dan het totaal vermenigvuldigen met 1.5
  if($business){
    $totaal = $totaal * 1.5;
  }

  return $totaal;

}

