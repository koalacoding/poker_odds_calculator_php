<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Côte selon l'argent du pot</title>
</head>

<body>

	<center>
	<form action="index.php" method="post">
		<input type="text" name="pot_odds1" value="<?php include("pot_odds_input_value1.php"); ?>"/> € dans
		<!-- This input is for the money the user has to add
		in the pot. There is a PHP include in the value parameter, so when
		the user submits his form choices, the choices appear in the text
		fields in the refreshed page. The $ at the end of the line is just to
		indicate that this text field is for a dollar amount. -->
		<input type="text" name="pot_odds2" value="<?php include("pot_odds_input_value2.php"); ?>"/> €
		<br />
		équivaut à du : 

		<?php
			if (isset($_POST['pot_odds1']) AND isset($_POST['pot_odds2'])) {
				echo 100 / ($_POST['pot_odds2'] / $_POST['pot_odds1'] + 1);
			}
		?>

		%
		<br /><br />
		<input type="submit" value="OK" />
	</form>
	<br /><br />
	<a href="../simple_odds">Calculer des côtes simples. Exemple : à combien de % équivaut 3 contre 1 ?</a>
	</center>

</body>

</html>
