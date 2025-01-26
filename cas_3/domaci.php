<?php

$naslov = "Postani Progamer";

$nav = [
	[
		"stranica" => "Glavna",
		"adresa" => "home.php"
	],
	[
		"stranica" => "O nama",
		"adresa" => "about_us.php"
	],
	[
		"stranica" => "Kontakt",
		"adresa" => "contact.php"
	],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $naslov ?></title>
</head>

<body>
	<h1><?= $naslov ?></h1>
	<nav>
		<a href=<?= $nav[0]["adresa"] ?>><?= $nav[0]['stranica'] ?></a>
		<a href=<?= $nav[1]["adresa"] ?>><?= $nav[1]['stranica'] ?></a>
		<a href=<?= $nav[2]["adresa"] ?>><?= $nav[2]['stranica'] ?></a>
	</nav>

	<footer>
		<p> Copyright &copy; <?= date("Y") ?></p>
	</footer>
</body>

</html>