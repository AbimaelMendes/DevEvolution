<?php

$conexao = mysqli_connect('localhost', 'root', '', 'API') or die("erro");

include 'Consumo.php';

$Viajem = new Consumo();

$Viajem->setConsumo($_POST['consumo']);
$Viajem->setDistancia($_POST['distancia']);

$consumoMedio = $Viajem->consumoMedio();


//gravando no banco de dados

$distancia = $Viajem->getDistancia();
$consumo = $Viajem->getConsumo();

$insert = "INSERT INTO `Consumo`(`valor1`, `valor2`, `consumoMedio`) VALUES ('{$distancia}','{$consumo}', '{$consumoMedio}')";
$result = mysqli_query($conexao, $insert);


header("Location: Formulario.php?consumoMedio=".$consumoMedio);
