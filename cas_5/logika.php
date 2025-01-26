<?php

// 1
// $broj = $_GET["broj"];

// $ostatak = $broj % 2 == 0;
// var_dump($ostatak);

// if ($ostatak) {
// 	echo "Broj je paran";
// } else {
// 	echo "Broj je neparan";
// }

// 2
// $ime = $_GET["ime"];
// echo "Dobrodosao " . $ime;

// 3
// $dan = strtolower($_GET["dan"]);
// switch ($dan) {
// 	case "ponedeljak":
// 		echo "Tek je pocetak...";
// 		break;
// 	case "utorak":
// 		echo "Drzi se tek je drugi dan.";
// 		break;
// 	case "sreda":
// 		echo "Wooho mali petak.";
// 		break;
// 	case "cetvrtak":
// 		echo "Samo jos jedan radni dan.";
// 		break;
// 	case "petak":
// 		echo "Poslednji dan.";
// 		break;
// 	case "subota":
// 		echo "Oladi subota je dan za odmor.";
// 		break;
// 	case "nedelja":
// 		echo "Spremi se za radnu nedelju.";
// 		break;
// };

// 4
$vrednost = $_GET["vrednost"];

echo gettype($vrednost);
