<?php

require_once "modeli/baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi");

$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

// ["id"]=> string(1) "1" ["ime"]=> string(9) "iPhone 13" ["opis"]=> string(12) "Dobar iphone" ["cena"]=> string(7) "1199.99" ["slika"]=> string(12) "iPhone13.jpg" ["kolicina"]=> string(2) "22" 


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Document</title>
</head>

<body>

	<?php foreach ($proizvodi as $proizvod) : ?>

		<div>
			<h1><?= $proizvod['ime']; ?></h1>
			<p><?= $proizvod['opis']; ?></p>
			<p>Cena proizvoda: <?= $proizvod['cena']; ?></p>
			<p>Na stanju: <?= $proizvod['kolicina']; ?></p>

			<?php if ($proizvod['kolicina'] == 0): ?>
				<p>Nema na stanju</p>
			<?php else: ?>
				<p>Ima na stanju</p>
			<?php endif; ?>

			<a href="proizvod.php?id=<?= $proizvod['id']; ?>">Pogledaj proizvod</a>
		</div>

	<?php endforeach; ?>

</body>

</html>