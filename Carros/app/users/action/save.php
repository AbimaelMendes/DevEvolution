<?php


include '../../../classes/session/session.php';

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();

$DB = $MySQL->connectDB();

$email = addslashes($_POST['email']);
$senha = sha1(addslashes($_POST['senha']));
$confirmaSenha = sha1(addslashes($_POST['confirmaSenha']));


$validaEmail= $DB-> query("SELECT id FROM user WHERE email = '$email'");

session_start();

$sessao= $_SESSION;


if ($validaEmail->num_rows > 0){

	header('Location: ../new.php?jaexiste=true');
	exit;
}

if ($senha == $confirmaSenha) {
	$DB->query("INSERT INTO `user`(`email`, `senha`) VALUES ('$email','$senha')");
	if ($DB->affected_rows > 0) {
		if (!$sessao) {
			header('Location: ../../../login.php');
		}else{
			echo "sesão existe";
			header('Location: ../list.php');
		}
	}else{
		header('Location: ../new.php');
	}
}else{
	$senha =1;
	header('Location: ../new.php?senha='.$senha);
}
