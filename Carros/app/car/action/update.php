 <?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();

$DB = $MySQL->connectDB();

if (isset($_GET['id'])) {
	$id = addslashes($_GET['id']);
}


$result = $MySQL->getForId($DB, 'cars', $id);

foreach ($result as $cli) {
	$id = $cli['id'];
	$marca = $cli['marca'];
	$modelo = $cli['modelo'];
	$ano = $cli['ano'];
	$valor = $cli['valor'];
	$obs = $cli['obs'];
}




