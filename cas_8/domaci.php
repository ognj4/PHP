<?php

$nav = [
	"Glavna" => "index.php",
	"O nama" => "about_us.php",
	"Kontakt" => "contact.php"
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Document</title>
</head>

<body>

	<nav>
		<?php foreach ($nav as $item => $link): ?>
			<a href="<?= $link ?>"><?= $item ?></a>
		<?php endforeach ?>
	</nav>

</body>

</html>