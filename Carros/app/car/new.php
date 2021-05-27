<!DOCTYPE html>
<?php
	include '../../classes/session/session.php';
	Session::validaSession(true);
?>
<html>
<head>
	<title>Cadastrar veículos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div>
			<nav aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Cadastrar clientes</li>
  				</ol>
			</nav>
		</div>
		<h1>Cadastrar veículos <a href="list.php"><button type="button" class="btn btn-success">Listar</button></a></h1>

		<form method="POST" action="action/save.php">
			<div class="form-group">
				<label for="marca">Marca</label>
				<select class="form-control" required name="marca" >
					<option value="NULL" selected>....</option>
					<option value="Chevrolet">Chevrolet</option>
					<option value="Ford">Ford</option>
					<option value="Fiat">Fiat</option>
					<option value="Volkswagen">Volkswagen</option>
				</select>
				<small class="form-text text-muted">Selheciona uma Marca</small>
			</div>

			<div class="row">
				<div class="col">
					<input type="text" name="modelo" required class="form-control" placeholder="Modelo....">
				</div>

				<div class="col">
					<input type="text" name="ano" required class="form-control" placeholder="Ano....">
				</div>

				<div class="col">
					<input type="text" name="valor" required class="form-control" placeholder="valor....">
				</div>
			</div>

			<br>

			<div class="form_group">
						<label for="obs">Obs:</label>
						<textarea class="form-control" name="obs" rows="3" placeholder="Descrição..."></textarea>
				</div>

				<br>

				<button type="submit" class="btn btn-primary">Cadastrar</button>
				<?php
          			if (isset($_GET['edit'])){
          				$edit = $_GET['edit'];
          				if ($edit == 1) {
          					echo '<div class="alert alert-warning" role="alert">
                    			Carro já cadastrado!
                  			</div>'; 
          				}      
          			}   
      			?>
		</form>
	</div>
</body>
</html>
