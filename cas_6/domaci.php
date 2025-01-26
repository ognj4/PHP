<?php

$imena = ["Ognjen", "Toma", "Petar"];

$imePostoji = isset($_POST["ime"]);
if (!$imePostoji) {
	die("Morate uneti ime!");
}

$duzinaImena = strlen($_POST["ime"]);

if ($duzinaImena <= 3) {
	die("Duzina mora da bude vise od 3 karaktera");
}

$imeUListi = in_array($_POST['ime'], $imena);
if (!$imeUListi) {
	die("Nismo pronasli ime u listi korisnika");
}

echo "Uspesno smo pronasli korisnika";
