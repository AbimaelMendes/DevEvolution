

<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();

$DB = $MySQL->connectDB();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

if ($email && $senha) {
	$senha = sha1($senha);
    
	$queryLogin = $DB->query("SELECT `id` FROM `user` WHERE email = '$email' AND senha ='$senha'");

	if ($queryLogin->num_rows == 1) {
		include '../../classes/session/session.php';
		Session::initSession($email);
		header('Location: ../../index.php');
	}else{
		$erro = 1;
		header('Location: ../../login.php?erro='.$erro);
	}
	
}
