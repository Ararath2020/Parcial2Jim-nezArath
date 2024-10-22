<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array carritos</title>
	<style type="text/css">
		body {
			background-color: #905060;
			font-family: Arial;
			font-size: 25px;
			color: white;
		}
	</style>
</head>
<body>
	<?php
	$carros= array('carro 1' => '25000', 'carro 2' => '350000', 'carro 2' => '400000', 'carro 3' => '500000',  'carro 4' => '1000000', 'carro 5' => '1000000');
	foreach ($carros as $carro => $precio) {
		echo "<pre>";
		echo "El modelo del ", $carro, " cuesta: $", $precio;
		echo "</pre>";
	}

	    echo "<br>";
	    echo "<br>";
	    echo "Se le agregan más modelos";
	    echo "<br>";
	    echo "<br>";

	    echo "<p>";

	    $carros ["carro 6"]= "2000000";
	    $carros ["carro 7"]= "10000000";

	arsort($carros);
	foreach ($carros as $carro => $precio) {
		echo "<pre>";
		echo "El modelo del ", $carro, " cuesta: $", $precio;
		echo "</pre>";
	}

	?>
</body>
</html>