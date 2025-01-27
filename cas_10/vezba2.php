<?php

function izracunajPopust($cena, $popust)
{
	$popust = $popust / 100;
	return $cena * $popust;
}

$obracunatiPopust = izracunajPopust(1500, 12);
$obracunatiPopust2 = izracunajPopust(2000, 10);
$obracunatiPopust3 = izracunajPopust(3000, 15);

$totalniPopust = $obracunatiPopust + $obracunatiPopust2 + $obracunatiPopust3;

echo $totalniPopust;
