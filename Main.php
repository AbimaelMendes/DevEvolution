<?php

include 'Consumo.php';

$Viajem = new Consumo();

$Viajem->setConsumo($_POST['consumo']);
$Viajem->setDistancia($_POST['distancia']);

$consumoMedio = $Viajem->consumoMedio();


header("Location: Formulario.php?consumoMedio=".$consumoMedio);