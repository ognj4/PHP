<?php
require_once "klase/Osoba.php";

$ognjen = new Osoba();
$ognjen->ime = "Ognjen";
$ognjen->prezime = "Stepanovic";
$ognjen->godinaRodjenja = 2002;
$ognjen->visina = 187;
$ognjen->tezina = 80;

$ognjen->izracunajGodine();
