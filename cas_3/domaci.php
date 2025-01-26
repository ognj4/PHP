<?php

$naslov = "Postani Progamer";

$nav = ["Glavna", "O nama", "Kontakt"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $naslov ?></title>
</head>

<body>
	<h1><?= $naslov ?></h1>
	<nav>
		<a href="home.php"><?= $nav[0] ?></a>
		<a href="about_us.php"><?= $nav[1] ?></a>
		<a href="contact.php"><?= $nav[2] ?></a>
	</nav>

	<footer>
		<p> Copyright &copy; <?= date("Y") ?></p>
	</footer>
</body>

</html>