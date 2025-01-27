<?php

function daLiJeBrojParan($broj)
{
	$parnost = $broj % 2;


	if ($broj == 0) {
		die("Ne moze broj 0");
	}

	if ($parnost == 0) {
		echo $broj . " je paran <br>";
	} else {
		echo $broj . " je nepran<br>";
	}
}
daLiJeBrojParan(12);
daLiJeBrojParan(0);
