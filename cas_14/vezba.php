<?php

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi");
$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

foreach ($proizvodi as $proizvod) {
	echo $proizvod['ime'] . "<br>";
}
