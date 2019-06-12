<!-- PregledAdresa.php -->

<?php 

include("header.php");
include("OtvoriVezu.php");

$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti";

$result = $veza->query($sql);

if ($result->num_rows > 0) {
	
?>

<h1>Pregled adresa</h1>
	<table border="1" id="tablica">
		<tr>
			<th>Ime</th>
			<th>Adresa</th>
			<th>Grad</th>
			<th>Email</th>
			<th>Spol</th>
			<th>Prijatelj</th>
			<th>Brisanje</th>
		</tr>

		<?php
		    // ispisujemo podatke u tablicu
			while ($row = $result->fetch_assoc() ) {
				
				$id = $row["Id"];
				$ime = $row["Ime"];
				$adresa = $row["Adresa"];
				$grad = $row["Grad"];
				$email = $row["Email"];
				$spol = $row["Spol"];
				$prijatelj = $row["Prijatelj"];


				echo "<tr>";
				echo "<td><a href='IzmjenaAdrese.php?id=$id'> $ime</a></td>";
				echo "<td>$adresa</td>";
				echo "<td>$grad</td>";
				echo "<td>$email</td>";
				echo "<td>$spol</td>";
				echo "<td>$prijatelj</td>";
				echo "<td><a href='ObrisiAdresu.php?id=$id'>Obriši</a></td>";
				echo "</tr>";

			}

		?>

	</table>

<?php
	
}

else
	{
 		echo "Dohvaćeno 0 rezultata";
	}

$veza->close();

include("footer.php");
?>

