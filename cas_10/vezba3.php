<?php

function izracunajKamatu($iznosKredita, $godina)
{
	$kamata = 0;

	if ($godina < 2000) {
		$kamata = 0.05;
	} else if ($godina >= 2000 && $godina <= 2010) {
		$kamata = 0.08;
	} else if ($godina > 2010 && $godina <= 2020) {
		$kamata = 0.1;
	} else {
		$kamata = 0.14;
	}

	return $iznosKredita * $kamata;
}

$kredit = izracunajKamatu(2000, 2001);
echo $kredit;

$noviKredit = izracunajKamatu(2000, 2023);
echo $noviKredit;
