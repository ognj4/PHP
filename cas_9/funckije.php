<?php

// obicna
function pozdraviKorisnika()
{
	echo "Pozdrav <br>";
}

pozdraviKorisnika();

// sa argumentima
function ispisiPoruku($argument, $argumentDva)
{
	echo $argument . " " . $argumentDva;
}

ispisiPoruku("wa", "ka");
