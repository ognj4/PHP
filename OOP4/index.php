<?php

require_once "Models/Korisnik.php";

$korisnik = new Korisnik();

// $korisnik->register("ognjen321@gmail.com", "123123");

$email = "blalba12@gmail.com";

$korisnik->update("ognjannnn@gmail.com", "ognja21nnnn@gmail.com", "222333");

if ($korisnik->emailExists($email) === false) {
	$korisnik->register($email, "232323");
} else {
	die("Vec postoji korisnik sa ovom mejl adresom");
}
