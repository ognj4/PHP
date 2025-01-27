<?php

function izracunajPDV($broj)
{
	$provera = is_integer($broj);

	if ($provera == 0) {
		die("Moras uneti broj");
	}

	if ($broj < 1) {
		echo "Ne moze broj manji od 1";
	} else {

		$stopa = 0.22;
		$pdv = $broj + ($broj * $stopa);

		echo $pdv;
	}
}

izracunajPDV(21);
izracunajPDV("jabuke");
