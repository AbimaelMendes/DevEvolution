<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">
	<style>
		.vermelho{color: red}
		.verde{color: green}
	</style>
</head>
<body>
	<h1>Formulário</h1>

	<form method="POST" action="Main.php">
		<p>Distância percorida em Km: </p><input type="number" name="distancia">
		<p>Consumo total de combustível em Litros:</p><input type="number" name="consumo">
		<br><br>
		<input type="submit" value="Calcular consumo médio">
	</form>

</body>
</html>
<?php
	$consumoMedio = $_GET['consumoMedio'];

	if ($consumoMedio != 'NAN') {

		if ($consumoMedio >= 10) {
			echo "Consumo Médio da viajem: ";
			echo "<p class =verde>".$consumoMedio."</p>"."Km/L";
		}else{
			echo "Consumo Médio da viajem: ";
			echo "<p class =vermelho>".$consumoMedio."</p>"."Km/L";
		}
	}else{
		echo "Preencha distância e consumo!";
	}	
?>
