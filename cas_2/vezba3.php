<?php

$ime = "Ognjen";
$godine = 22;
$rez = 2 + 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vezba 3</title>
</head>

<body>
	<h1><?php echo $ime; ?></h1>
	<h1> <?= $ime; ?> </h1>

	<p> <?php echo $godine; ?></p>
	<p> <?php echo $rez; ?></p>
</body>

</html>