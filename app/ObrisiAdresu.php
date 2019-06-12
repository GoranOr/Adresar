<!-- ObrisiAdresu.php -->

<?php 

include("header.php");
include("OtvoriVezu.php");

?>

<h1>Brisanje adrese</h1>

<?php

$id = $_GET['id'];

$veza = OtvoriVezu();

$sql = "DELETE FROM kontakti WHERE Id = $id";

if ($veza->query($sql) === TRUE) 
	{
		echo "Zapis je uspješno obrisan.";
	}

	else
	{
		echo "Greška: " . $veza->error;
	}


	$veza->close();
	
?>

<br><br><a href="PregledAdresa.php">Vrati se na pregled</a>

<?php include("footer.php"); ?>
