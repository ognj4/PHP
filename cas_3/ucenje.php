<?php

$automobili = [
	"Zastava" => ["Yugo", "Skala", "101"],
];

echo $automobili["Zastava"][1];


$osobe = [
	"Ognjen" => [
		"prezime" => "Stepanovic",
		"godine" => 22,
		"programer" => true,
	],
	"Marko" => [
		"prezime" => "Markovic",
		"godine" => 32,
		"programer" => false,
	],
];

echo $osobe["Ognjen"]["programer"];
echo $osobe["Marko"]["godine"];

$osobe["Jelena"] = [
	"prezime" => "Sovrlic",
	"godine" => 22,
	"programer" => false,
	"nadimak" => "Jeca"
];

echo "Ja se zovem {$osobe['Jelena']['nadimak']}, a prezivam se {$osobe['Jelena']['prezime']}";


$imena = array_keys($osobe);
var_dump($imena);

$prezimena = array_column($osobe, "prezime");
var_dump($prezimena);
