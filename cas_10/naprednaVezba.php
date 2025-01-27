<?php

$brojevi = [250, 330, 1000, 2000, 5000];
$popusti = [];
$stopa = 20 / 100;

function izracunajPopust($cena, $stopa)
{
	return $cena * $stopa;
}

foreach ($brojevi as $broj) {
	$popust = izracunajPopust($broj, $stopa);
	array_push($popusti, $popust);
}
$ukupanPopust = array_sum($popusti);

echo $ukupanPopust . " je ukupan popust";
// var_dump($popusti);
