<?php

$automobili = [
	"Zastava" => [
		"model" => "Yugo 55",
		"godiste" => 1995
	],
	"Renault" => [
		"model" => "Megane",
		"godiste" => 2014
	],
	"Toyota" => [
		"model" => "Rav4",
		"godiste" => 2021
	],
];

$year = date('Y');


foreach ($automobili as $auto => $value) {
	$godisteAuta = $value["godiste"];
	$modelAuta = $value["model"];
	$starost = $year - $godisteAuta;
	$status = "";

	if ($starost <= 5) {
		$status = "nov";
	} else if ($starost > 5 && $starost < 12) {
		$status = "star";
	} else if ($starost > 20) {
		$status = "oldtimer";
	}
	echo "$modelAuta je $status auto <br>";
}
