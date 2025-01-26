<?php
var_dump($_GET);

$vrsta = $_GET["vrsta"];
$cena = $_GET["cena"];
$porez = $_GET["porez"];

if ($vrsta = "Hrana") {
	$cena += 50;
} else if ($vrsta = "Oprema za racunare") {
	$cena += 350;
}

if (isset($porez)) {
	$cena = ($cena * 0.10) + $cena;
}

echo $cena;
