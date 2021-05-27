<!DOCTYPE html>
<?php
	include '../../classes/session/session.php';
	Session::validaSession(true);
	include 'action/update.php';
?>


<html>
<head>
	<title>Editar veículos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div>
			<nav aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Atualizar veículo</li>
  				</ol>
			</nav>
		</div>
		<h1>Atualizar veículos <a href="list.php"><button type="button" class="btn btn-success">Listar</button></a></h1>

		<form method="POST" action="action/updateBD.php">
			<div class="form-group">
				<label for="marca">Marca</label>
				<select class="form-control" required name="marca" >
					<option value="Chevrolet" <?=($marca == 'Chevrolet')?'selected':''?>>Chevrolet</option>
					<option value="Ford"<?=($marca == 'Ford')?'selected':''?>>Ford</option>
					<option value="Fiat"<?=($marca == 'Fiat')?'selected':''?>>Fiat</option>
					<option value="Volkswagen" <?=($marca == 'Volkswagen')?'selected':''?>>Volkswagen</option>
				</select>
				<small class="form-text text-muted">Selheciona uma Marca</small>
			</div>

			<div class="row">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<div class="col">
					<input type="text" name="modelo" required class="form-control" value="<?php echo $modelo; ?>">
				</div>

				<div class="col">
					<input type="text" name="ano" required class="form-control" value="<?php echo $ano; ?>">
				</div>

				<div class="col">
					<input type="text" name="valor" required class="form-control" value="<?php echo $valor; ?>">
				</div>
			</div>

			<br>

			<div class="form_group">
						<label for="obs">Obs:</label>
						<textarea class="form-control" name="obs" ><?php echo trim($obs); ?></textarea>
			</div>

				<br>

				<button type="submit" class="btn btn-primary">Atualizar</button>

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