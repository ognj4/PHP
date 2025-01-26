<?php

$checkPin = isset($_POST["pin"]);
if (!$checkPin) {
	die("Niste uneli pin!");
}

$duzina = strlen($_POST["pin"]);
if ($duzina < 4 || $duzina > 6) {
	die("Pin mora da bude izmedju 4 i 6 karaktera");
}


echo "Uspesno ste uneli pin";
