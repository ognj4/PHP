<?php

require_once "modeli/baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi");

$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proizvodi</title>
</head>

<body>

	<a href="dodajProizvod.php">Dodaj proizvod</a>


	<?php foreach ($proizvodi as $proizvod): ?>

		<div>
			<h1><?= $proizvod['ime'] ?></h1>
			<p><?= $proizvod['opis'] ?> </p>
			<p>Cena je: <?= $proizvod['cena'] ?> </p>
			<p>Na stanju: <?= $proizvod['cena'] ?> </p>
			<a href="proizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
		</div>

	<?php endforeach; ?>





</body>

</html>