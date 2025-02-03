<?php

require_once "Modeli/Automobil.php";
require_once "Modeli/Vozilo.php";
require_once "Modeli/Autobus.php";
require_once "Modeli/Avion.php";

$boeing747 = new Avion();
$boeing747->marka = "Boeing";
$boeing747->model = 747;
$boeing747->padobran = false;
$boeing747->pogon = "mlaznjak";

$autobus = new Autobus();
$autobus->marka = "Mercedes";
$autobus->brojVrata = 2;
$autobus->brojSedista = 30;
$autobus->spratni = false;

echo $autobus->marka . " " . $autobus->brojVrata;

$audiA4 = new Automobil();
$audiA4->marka = "Audi";
$audiA4->model = "A4";
$audiA4->boja = "crvena";
$audiA4->vrsta = "automobil";
$audiA4->tezina = 2000;

echo $audiA4->vrsta;
echo $audiA4->tezina;

$yugo55 = new Automobil();
$yugo55->marka = "Zastava";
$yugo55->model = "Yugo 55";
$yugo55->boja = "bela";

$bmwX5 = new Automobil();
$bmwX5->marka = "BMW";
$bmwX5->model = "X5";
$bmwX5->boja = "zuta";
