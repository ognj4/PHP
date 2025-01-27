<?php

function izracunajDostavu($grad)
{
	$cenaDostave = 0;
	$dostava = [
		"Subotica" => 220,
		"Kragujevac" => 11,
		"Los Angeles" => 292,
		"Sarajevo" => 799,
	];

	$gradPostoji = array_key_exists($grad, $dostava);
	if ($gradPostoji) {
		$rastojanje = $dostava[$grad];

		if ($rastojanje <= 100) {
			$cenaDostave = 200;
		} else if ($rastojanje > 100 && $rastojanje <= 200) {
			$cenaDostave = 350;
		} else {
			$cenaDostave = 500;
		}
	} else {
		$cenaDostave = null;
	}
	return $cenaDostave;
}

$dostava = izracunajDostavu("Sarajevo");
echo $dostava;
