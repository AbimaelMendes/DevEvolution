<?php
	include 'classes/session/session.php';
	Session::validaSession();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar veículos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="pos-f-t">
	  <nav class="navbar navbar-dark bg-dark">
	      
	    <div>
			<span class="text-white">Seja bem vindo <?php echo $_SESSION['email'];?></span>
		</div>
		<span class="text-muted"><a href="logout.php">Sair</a></span>
	  </nav>
	</div>
	<br>
	<div class="container PY-4">

		
		<div class="row align-items-md-stretch">
	      <div class="col-md-6">
	        <div class="h-100 p-5 text-white bg-dark rounded-3">
	          <h2>Cadastrar veículos</h2>
	          <p>Insira novos Veículos no sistema</p>
	          <a href="app/car/new.php"><button class="btn btn-outline-light" type="button">Cadastrar</button></a>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="h-100 p-5 bg-light border rounded-3">
	          <h2>Visualizar veículos</h2>
	          <p>Visualize, edite e exclua veículos.</p>
	          <a href="app/car/list.php"><button class="btn btn-outline-secondary" type="button">Visualizar</button></a>
	        </div>
	      </div>
	    </div>	
	</div>

	<br>

	<div class="pos-f-t">
		<div class="container PY-4">

			
			<div class="row align-items-md-stretch">
		      <div class="col-md-6">
		        <div class="h-100 p-5 text-white bg-info rounded-3">
		          <h2>Cadastrar usuários</h2>
		          <p>Insira novos usuários no sistema</p>
		          <a href="app/users/new.php"><button class="btn btn-outline-light" type="button">Cadastrar</button></a>
		        </div>
		      </div>
		      <div class="col-md-6">
		        <div class="h-100 p-5 bg-light border rounded-3">
		          <h2>Visualizar usuários</h2>
		          <p>Visualize, edite e exclua usuários.</p>
		          <a href="app/users/list.php"><button class="btn btn-outline-secondary" type="button">Visualizar</button></a>
		        </div>
		      </div>
		    </div>	
		</div>
	</div>	
</body>
</html>