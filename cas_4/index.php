<?php


$ime = "Ognjen";
$godine = 22;
$visina = 187.5;

if ($ime == "Ognjen") {
	echo "Pozz to si ti";
};

if ($godine == 18) {
	echo "Imas vise od 18";
} else if ($godine > 25) {
	echo "Auu al si mator";
};

if ($visina < 185) {
	echo "Nizak si";
} else {
	echo "Visok si";
};


$godinaRodjenja = 2002;


if ($godinaRodjenja == 1992) {
	echo "Imas 33 god";
} else if ($godinaRodjenja == 1999) {
	echo "Imas 26 god";
} else if ($godinaRodjenja == 1990) {
	echo "Imas 35 god";
} else {

	$starost = date('Y') - $godinaRodjenja;
	echo "Imas $starost god";
};
