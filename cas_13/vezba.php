<!DOCTYPE html>
<html lang="en">

<head>

	<title>Document</title>
</head>

<body>

	<form action="baza.php" method="POST">
		<input type="text" name="ime_proizvoda" placeholder="Ime" required>
		<input type="text" name="opis" placeholder="Opis" required>
		<input type="number" name="cena" placeholder="Cena" required>
		<input type="number" name="kolicina" placeholder="Kolicina" required>
		<input type="text" name="datum_nabavke" placeholder="Datum nabavke" required>
		<button>Dodaj proizvod</button>
	</form>

</body>

</html>