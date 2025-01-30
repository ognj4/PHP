<?php


if (!isset($_POST['ime']) || empty($_POST['ime'])) {
	die("Niste uneli ime");
}
if (!isset($_POST['opis']) || empty($_POST['opis'])) {
	die("Niste uneli opis");
}
if (!isset($_POST['cena']) || empty($_POST['cena'])) {
	die("Niste uneli cenu");
}
if (!isset($_POST['slika']) || empty($_POST['slika'])) {
	die("Niste uneli sliku");
}
if (!isset($_POST['kolicina']) || empty($_POST['kolicina'])) {
	die("Niste uneli kolicinu");
}

$ime = $_POST['ime'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$slika = $_POST['slika'];
$kolicina = $_POST['kolicina'];

require_once "baza.php";

$baza->query("INSERT INTO proizvodi (ime,opis,cena,slika,kolicina) VALUES ('$ime','$opis','$cena','$slika','$kolicina')");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>


	<a href="../proizvodi.php">Pogledaj sve proizvode</a>
</body>

</html>