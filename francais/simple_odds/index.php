<!DOCTYPE html>
<html>
<head>
<title>Côtes simples</title>
</head>

<body>

	<center>
	<form action="index.php" method="post">
		<input type="text" name="simple_odd" value="<?php include("simple_odds_input_value.php"); ?>"/>

		<br />
		contre 1 équivaut à du : 

		<?php
			if (isset($_POST['simple_odd'])) {
				echo 100 / ($_POST['simple_odd'] + 1);
			}
		?>

		%
		<br /><br />
		<input type="submit" value="OK" />
	</form>
	<br /><br />
	<a href="../pot_odds">Calculer une côte selon l'argent du pot et l'argent à payer. 
	Exemple : à combien de % d'équité équivaut 100€ à rajouter pour gagner un pot de 200€ ?</a>
	</center>

</body>

</html>
