<?php

if (!isset($_GET['email']) || empty($_GET['email'])) {
	die("Niste uneli email");
}

require_once "baza.php";

$email = $_GET['email'];

$rezultat = $baza->query("SELECT * FROM `korisnici` WHERE email LIKE '%$email%'");

if ($rezultat->num_rows >= 1) {
	echo "Nasli smo " . $rezultat->num_rows . " korisnika sa tim karakterom";
} else {
	echo "Nema registrovanih korisniika sa tim emailom";
}
