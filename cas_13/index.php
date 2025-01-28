<?php

$baza = mysqli_connect("localhost", "root", "", "prvi_cas");

if (mysqli_connect_error()) {
	die("Niste se konektovali na bazu podataka");
}

// mysqli_query($baza, "INSERT INTO korisnici (email,lozinka, datum_rodjenja) VALUES ('test2@gmail.com', 'admin', '1999-02-22')");

$ime = "Crveni krompir";
$opis = "Crveni krompir najbolji";
$cena = 150;
$datumNabavke = "2022-02-02";
$kolicina = 22;

$baza->query("INSERT INTO proizvodi (ime,opis,cena,dan_nabavke,kolicina) VALUES ('$ime','$opis',$cena,'$datumNabavke',$kolicina)");
