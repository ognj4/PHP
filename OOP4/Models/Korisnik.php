<?php

require_once "Baza.php";

class Korisnik extends Baza
{


	private $name = "ognjen";

	public function getName()
	{
		return $this->name;
	}
	public function setName($newName)
	{
		$this->name = ucfirst($newName);
	}

	public function register($email, $sifra)
	{
		$email = $this->sql->real_escape_string($email);
		$sifra = $this->sql->real_escape_string($sifra);

		$this->sql->query("INSERT INTO korisnici (email,sifra) 
		VALUES ('$email','$sifra')");
	}

	public function emailExists($email)
	{
		$email = $this->sql->real_escape_string($email);
		$result = $this->sql->query("SELECT * FROM korisnici WHERE email = '$email'");

		if ($result->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($email)
	{
		$email = $this->sql->real_escape_string($email);

		$this->sql->query("DELETE FROM korisnici WHERE email = '$email' ");
	}

	//$userEmail stari email
	//$email nova email adresa
	public function update($userEmail, $email, $sifra)
	{
		$sifra = password_hash($sifra, PASSWORD_BCRYPT);
		$email = $this->sql->real_escape_string($email);
		$sifra = $this->sql->real_escape_string($sifra);
		$userEmail = $this->sql->real_escape_string($userEmail);

		$this->sql->query("UPDATE korisnici set email = '$email', sifra = '$sifra' WHERE email = '$userEmail'");
	}
}
