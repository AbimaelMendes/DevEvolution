<?php

class Session{
	public static function initSession($email){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['logado'] = true;
	}

	public static function validaSession($app = false){
		session_start();
		if (is_null($_SESSION) || !$_SESSION['logado']) {
			if ($app) {
				header('Location: ../../login.php?permissao=false');
			}else{
				header('Location: login.php?permissao=false');
			}
		}
	}

	public static function validaSessionLogin(){

		session_start();

		if(!is_null($_SESSION) && isset($_SESSION['logado'])){
			header('Location: index.php');
		}
	}

}