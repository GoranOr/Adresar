<!-- SpremiAdresu.php -->

<?php 

	include("header.php");
	include("OtvoriVezu.php");

 ?>

	<h1>Spremljena adresa</h1>

	<?php

		$ime = $_POST['ime'];
		$adresa = $_POST['adresa'];
		$grad = $_POST['grad'];
		$email = $_POST['email'];
		
		// provjeravamo je li postavljen spol
		if( isset($_POST['spol']) )
		{
			if( $_POST['spol'] == "M" )
				$spol = "M";
			else
				$spol = "Ž";
		}
		else
			$spol = "";

		// provjeravamo je li postavljen prijatelj
		if( isset($_POST['prijatelj']) )
			$prijatelj = "Da";
		else
			$prijatelj = "Ne";


		echo "Ime: $ime <br>";
		echo "Adresa: $adresa <br>";
		echo "Grad: $grad <br>";
		echo "Email: $email <br>";
		echo "Spol: $spol <br>";
		echo "Prijatelj: $prijatelj <br>";

		$veza = OtvoriVezu();

		$sql = " INSERT INTO kontakti (`Ime`, `Adresa`, `Grad`, `Email`, `Spol`, `Prijatelj`)";
		$sql .=" VALUES ('$ime', '$adresa', '$grad', '$email', '$spol', '$prijatelj')";

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

<?php include("footer.php"); ?>