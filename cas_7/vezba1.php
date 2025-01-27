<?php

$marke = ["Audi", "BMW", "Mercedes"];

foreach ($marke as $marka) {
	if ($marka == "BMW") {
		continue;
	}
	echo $marka . " ";
}
