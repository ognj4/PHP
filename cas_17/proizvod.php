<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
	die("Fali ID proizvoda!");
}

require_once "modeli/baza.php";

$idProizvoda = $_GET['id'];

$rezultat = $baza->query(" SELECT * FROM proizvodi WHERE id = $idProizvoda ");

if ($rezultat->num_rows == 0) {
	die("Ovaj proizvod ne postoji");
}

$proizvod = $rezultat->fetch_assoc();

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}


?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
	<?php require_once "html_delovi/navigacija.php" ?>

	<div class="container d-flex flex-column justify-content-center align-items-center mt-3">
		<h1><?= $proizvod['ime'] ?></h1>
		<p><?= $proizvod['opis'] ?></p>
		<p>Cena proizvoda: <?= $proizvod['cena'] ?></p>

		<?php if ($proizvod['kolicina'] == 0): ?>
			<p>Nema na stanju</p>
		<?php else: ?>
		<?php endif; ?>
		<p>Ima na stanju</p>

		<?php if (isset($_SESSION['ulogovan'])): ?>

			<form action="korpa.php" method="post">
				<input type="number" name="kolicina" placeholder="Unesite kolicinu proizvoda">
				<input type="hidden" name="id_proizvoda" value="<?= $proizvod['id'] ?>">
				<button class="btn btn-primary">Dodaj u korpu</button>
			</form>

		<?php else: ?>
			<a href="login.php" class="btn btn-primary">Klikni da se ulogujes kako bi dodao u korpu</a>
		<?php endif ?>
		<a href="index.php" class="btn btn-primary mt-3">Vrati se nazad</a>
	</div>
</body>

</html>