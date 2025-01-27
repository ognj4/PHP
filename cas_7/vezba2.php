<?php

$brojevi = [22, 53, 36, 46, 13];

$sum = 0;
foreach ($brojevi as $broj) {
	$ostatak = $broj % 9;
	if ($ostatak % 9 == 0) {
		continue;
	}
	$sum += $broj;
}

echo $sum;
