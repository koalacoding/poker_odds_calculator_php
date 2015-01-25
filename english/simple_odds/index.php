<!DOCTYPE html>
<html>
<head>
<title>Simple odds</title>
</head>

<body>

	<center>
	<form action="index.php" method="post">
		<input type="text" name="simple_odd" value="<?php include("simple_odds_input_value.php"); ?>"/>

		<br />
		to 1 is equal to : 

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
	<a href="../pot_odds">Calculate odds from money to add in the money. 
	(example : how much % equity is 50$ to put in a 100$ pot.)</a>
	</center>

</body>

</html>
