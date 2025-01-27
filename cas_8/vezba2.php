<?php

$imena = ["Ognjen", "Petar", "Vlada"];

foreach ($imena as &$ime) {
	$ime = strtolower($ime);
}
var_dump($imena);
