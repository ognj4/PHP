<?php

$automobili = [
	"audi" => "a4",
	"bmw" => "x1"
];

foreach ($automobili as $marka => $model) {
	echo "Marka automobila je $marka, a model je $model <br>";
}


$osobe = [
	"Gio" => [
		"puno_ime" => "Ognjen",
		"prezime" => "Stepanovic",
		"godine" => 22
	],
	"Dzoni" => [
		"puno_ime" => "Nikola",
		"prezime" => "Pavlovic",
		"godine" => 24
	],
];

echo $osobe["Gio"]["puno_ime"] . " " . $osobe["Gio"]["prezime"];
echo "<br>";

foreach ($osobe as $ime => $osoba) {
	$godine = $osoba["godine"];
	echo "Osoba $ime ima $godine god <br>";
}
