<?php

if (!isset($_POST['email']) || empty($_POST['email'])) {
	die("Email nije dobar!");
}
if (!isset($_POST['sifra']) || empty($_POST['sifra'])) {
	die("Email nije dobar!");
}

require_once "modeli/baza.php";

$email = $_POST['email'];
$sifra = $_POST['sifra'];

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email =  '$email' ");

if ($rezultat->num_rows == 1) {
	echo "Dobrodosao!";
} else {
	die("Nema te!");
}
