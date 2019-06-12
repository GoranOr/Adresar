<!-- index.php -->

<?php include("header.php"); ?>

	<h1>Unos adrese</h1>

	<form method="post" action="SpremiAdresu.php">
		
		Ime:<br>
		<input type="text" name="ime" required>
		<br><br>

		Adresa:<br>
		<input type="text" name="adresa" required>
		<br><br>

		Grad:<br>
		<select name="grad" id="grad">
			<option>Zagreb</option>
			<option>Split</option>
			<option>Rijeka</option>
		</select>
		<br><br>

		Email:<br>
		<input type="email" name="email" required>
		<br><br>

		Spol:<br>
		<input type="radio" name="spol" value="M"> Muški <br>
		<input type="radio" name="spol" value="Ž"> Ženski
		<br><br>

		Prijatelj: <br>
		<input type="checkbox" name="prijatelj" checked="checked"> Dodaj prijatelja
		<br><br>

		<input type="submit" value="Spremi">
		<input type="reset" value="Odustani">

	</form>

	<br>

<?php include("footer.php"); ?>