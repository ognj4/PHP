<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

if (!isset($_SESSION['ulogovan'])) {
	die("Morate biti ulogovani!");
}


require_once "modeli/baza.php";

$userID = $_SESSION['user_id'];
$rezultat = $baza->query("SELECT * FROM narudzbine WHERE id_korisnika = $userID");

$narudzbine = $rezultat->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Korpa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

	<?php require_once "html_delovi/navigacija.php" ?>

	<?php if ($rezultat->num_rows == 0): ?>
		<p>Nemate ni jedan proizvod</p>
	<?php else: ?>

		<?php foreach ($narudzbine as $narudzba): ?>
			<div class="text-center mt-3">
				<p>Kolicina: <?= $narudzba['kolicina'] ?> Cena: <?= $narudzba['cena'] ?></p>
				<p></p>


			</div>
		<?php endforeach ?>


	<?php endif ?>
</body>

</html>