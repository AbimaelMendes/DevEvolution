<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();

$DB = $MySQL->connectDB();

$marca = addslashes($_POST['marca']);
$modelo = addslashes($_POST['modelo']);
$ano = addslashes($_POST['ano']);
$valor = addslashes($_POST['valor']);
$obs =trim(addslashes($_POST['obs']));

$verificaModelo = $DB->query("SELECT * FROM `cars` WHERE modelo = '$modelo' AND ano = '$ano'");

foreach ($verificaModelo as $e) {
	$marcaBD = $e['marca'];
}

if ($verificaModelo->num_rows > 0) {
	if ($marcaBD == $marca) {
		echo "cheguei";
		$edit = 1;
		header('Location: ../new.php?edit='.$edit.'');
	}else{
		$DB->query("INSERT INTO `cars`(`marca`, `modelo`, `ano`, `valor`, `obs`) VALUES ('$marca','$modelo','$ano','$valor','$obs')");
		header('Location: ../list.php');
	}
	
}else{
	
	$DB->query("INSERT INTO `cars`(`marca`, `modelo`, `ano`, `valor`, `obs`) VALUES ('$marca','$modelo','$ano','$valor','$obs')");

	if ($DB->affected_rows > 0) {
		header('Location: ../list.php');
	}else{
		header('Location: ../new.php');
	}
}
