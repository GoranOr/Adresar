<!-- SpremiIzmjenu.php -->
<?php

include("header.php");
include("OtvoriVezu.php");


?>

<h1>Izmjena adrese:</h1>


<?php

	$id = $_POST['id'];
	$ime = $_POST['ime'];
	$adresa = $_POST['adresa'];
	$grad = $_POST['grad'];
	$email = $_POST['email'];
	$spol = $_POST['spol'];

	// provjeravamo je li postavljen prijatelj
	if( isset($_POST['prijatelj']) )
		$prijatelj = "Da";
	else
		$prijatelj = "Ne";

	$veza = OtvoriVezu();

	$sql = "UPDATE kontakti SET Ime = '$ime', Adresa = '$adresa'";
	$sql .= ", Grad = '$grad', Email = '$email', Spol = '$spol'";
	$sql .= ", Prijatelj = '$prijatelj' WHERE Id = $id";

	if ($veza->query($sql) === TRUE) 
	{
		echo "Zapis je uspješno spremljen.";
	}

	else
	{
		echo "Greška: " . $veza->error;
	}


	$veza->close();
	
?>

<br><br><a href="PregledAdresa.php">Vrati se na pregled</a>

<?php include("footer.php"); ?>