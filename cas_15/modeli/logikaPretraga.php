<?php

if (!isset($_GET['ime']) || empty($_GET['ime'])) {
	die("Niste uneli ime proizvoda");
}

$ime = $_GET['ime'];

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$ime%' OR opis LIKE '%$ime%' ");

if ($rezultat->num_rows >= 1) {
	echo "Uspesno smo pronasli " . $rezultat->num_rows . " proizvoda";
} else {
	echo "Nismo pronasli ni jedan proizvod";
}

$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);


foreach ($proizvodi as $proizvod) {
	echo "<br>" . $proizvod['ime'];
}
