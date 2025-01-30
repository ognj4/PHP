<?php



if (!isset($_GET['id']) || empty($_GET['id'])) {
	die("Fail ID proizvoda");
}


require_once "modeli/baza.php";

$idProizvoda = $_GET['id'];
$rezultat = $baza->query("SELECT * FROM proizvodi WHERE id = '$idProizvoda'");


if ($rezultat->num_rows == 0) {
	die("Ovaj proizvod ne postoji");
}

$proizvod = $rezultat->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Proizvod</title>

</head>

<body>

	<div>
		<h1><?= $proizvod['ime'] ?></h1>
		<p><?= $proizvod['opis'] ?></p>
		<p><?= $proizvod['cena'] ?></p>
		<p><?= $proizvod['kolicina'] ?></p>
		<a href="proizvodi.php">Nazad</a>
	</div>




</body>

</html>