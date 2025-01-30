<?php

if (!isset($_POST['email']) || empty($_POST['email'])) {
	die("Email nije dobar!");
}
if (!isset($_POST['sifra']) || empty($_POST['sifra'])) {
	die("Email nije dobar!");
}

require_once "baza.php";

$email = $_POST['email'];
$sifra = password_hash($_POST['sifra'], PASSWORD_BCRYPT);


$rezultat = $baza->query("SELECT * FROM `korisnici` WHERE email = '$email'");

if ($rezultat->num_rows >= 1) {
	die("Vec postoji korisnik sa tom mail adresom");
} else {
	echo "Uspesno ste se registrovali";
	$baza->query("INSERT INTO korisnici (email,sifra) VALUES ('$email','$sifra')");
}
