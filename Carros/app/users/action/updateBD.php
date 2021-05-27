<?php

include 'classes/session/session.php';

session_start();

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();

$DB = $MySQL->connectDB();
$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$emailSession = $_SESSION['email'];

$validaEmail= $DB-> query("SELECT id FROM user WHERE email = '$email' AND email != '$emailSession'");

if ($validaEmail->num_rows > 0){
	$senha =2;
	header('Location: ../edit.php?id='.$id.'&edit='.$senha.'');
	exit();
}
if ($senha == $confirmaSenha) {
	$senha = sha1($senha);
    $DB->query("UPDATE `user` SET `email`='$email',`senha`='$senha' WHERE id = '$id'");
	if ($DB->affected_rows > 0) {
		header('Location: ../list.php');
	}else{
		header('Location: ../edit.php');
	}
}else{
	$senha =1;
	header('Location: ../edit.php?id='.$id.'&edit='.$senha.'');
}

?>