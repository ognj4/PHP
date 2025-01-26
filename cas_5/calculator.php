<?php

// calculator.php?broj_1=123&broj_2=333 
// Global variable
// $_SERVER, $_GET, $_POST  

// var_dump($_GET);

// echo $_GET["broj_1"];
// echo $_GET["broj_2"];

$br1 = $_GET["broj_1"];
$br2 = $_GET["broj_2"];
$racunica = $_GET["vrsta_racunice"];

$sum = $br1 + $br2;
$sub = $br1 - $br2;

if ($racunica == "Sabiranje") {
	echo $sum;
} else if ($racunica == "Oduzimanje") {
	echo $sub;
}
