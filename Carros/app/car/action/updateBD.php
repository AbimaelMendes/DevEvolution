<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();

$DB = $MySQL->connectDB();
$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$valor = $_POST['valor'];
$obs = trim($_POST['obs']);

$verificaModelo = $DB->query("SELECT * FROM `cars` WHERE marca = '$marca' AND modelo = '$modelo' AND ano = '$ano'");

foreach ($verificaModelo as $e) {
	$obsBD = trim($e['obs']);
	$idDB = $e['id'];
}

if ($verificaModelo->num_rows > 0) {
	
	if ($obsBD != $obs && $id == $idDB) {
		$DB->query("UPDATE `cars` SET `marca`='$marca',`modelo`='$modelo',`ano`='$ano',`valor`='$valor',`obs`='$obs' WHERE id = '$id'");
		header('Location: ../list.php');
	}else{
		$edit = 1;
		header('Location: ../edit.php?id='.$id.'&edit='.$edit.'');
	}
}else{
	$DB->query("UPDATE `cars` SET `marca`='$marca',`modelo`='$modelo',`ano`='$ano',`valor`='$valor',`obs`='$obs' WHERE id = '$id'");
	header('Location: ../list.php');
}



?>