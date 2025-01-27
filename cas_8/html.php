<?php

$imena = ["Ognjen", "Petar", "Vlada"];


?>

<!DOCTYPE html>
<html lang="en">

<body>

	<?php
	foreach ($imena as $ime) { ?>
		<p><?php echo $ime; ?></p>
	<?php } ?>


	<?php foreach ($imena as $ime): ?>
		<p><?= $ime ?></p>
	<?php endforeach; ?>

</body>

</html>