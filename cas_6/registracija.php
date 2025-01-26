<?php

// var_dump($_POST);
// exit();

$checkIme = isset($_POST["ime"]);
if (!$checkIme) {
	die("Ime nije prosledjeno");
}
$checkLozinka = isset($_POST["lozinka"]);
if (!$checkLozinka) {
	die("Lozinka nije postavljena");
}

$ime = trim($_POST["ime"]);
if ($ime == "") {
	die("Morate uneti ime!");
}
$lozinka = trim($_POST["lozinka"]);
if ($lozinka == "") {
	die("Morate uneti lozinku!");
}

echo $_POST["ime"] . " " . $_POST["lozinka"];
