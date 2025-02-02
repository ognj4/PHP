<?php

class User
{
	public $email;
	public $sifra;

	public function __construct($mejl, $password)
	{
		$this->email = $mejl;
		$this->sifra = $password;
	}

	public function save()
	{
		$baza = mysqli_connect("localhost", "root", "", "web_shop");

		$email = $baza->real_escape_string($this->email);
		$password = $baza->real_escape_string($this->sifra);

		$baza->query("INSERT INTO korisnici (email,sifra)VALUES ('$email','$password')");
	}
}
