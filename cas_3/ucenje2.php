<?php

$osobe = [
	[
		"ime" => "Ognjen",
		"prezime" => "Stepanovic",
		"godiste" => 2002,
	],
	[
		"ime" => "Jelena",
		"prezime" => "Sovrlic",
		"godiste" => 2002,
	],
];

// echo $osobe[0]['ime'];
// echo $osobe[1]['godiste'];

$currentYear = date('Y');
$godine = $currentYear - $osobe[0]['godiste'];
echo "{$osobe[0]['godiste']}, $godine godina";
