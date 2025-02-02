<?php

class Osoba
{
	public $ime;
	public $prezime;
	public $godinaRodjenja;
	public $visina;
	public $tezina;

	public function izracunajGodine()
	{
		$godine = date('Y') - $this->godinaRodjenja;
		echo "Imate: " . $godine . " godina";
	}
}
