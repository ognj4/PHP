<?php

// 1

$ime = strtolower("ADMINistrator");
$lozinka = "sifra123";

if ($ime === "administrator" && $lozinka == "sifra123") {
	echo "Dobrodosao admine";
} else {
	echo "To nije admin!";
};


// 2

$currTime = date('H');
// $currTime = 4;
var_dump($currTime);
if ($currTime >= 5 && $currTime <= 12) {
	echo "Jutro jeee";
} else if ($currTime >= 12 && $currTime <= 20) {
	echo "Podne jeee";
} else {
	echo "Noc je";
}
