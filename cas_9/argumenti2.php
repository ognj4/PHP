<?php

function sumNumbers($number1, $number2)
{
	if ($number1 == 0 || $number2 == 0) {
		die("Broj ne sme biti nula");
	}
	echo $number1 + $number2;
}
sumNumbers(0, 5);
