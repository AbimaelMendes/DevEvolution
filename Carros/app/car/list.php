
<!DOCTYPE html>
<?php
	include '../../classes/session/session.php';
	Session::validaSession(true);
?>
<html>
<head>
	<title>Listar veículos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div>
			<nav aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Listar clientes</li>
  				</ol>
			</nav>	
		</div>
		<h1>Veículos <a href="new.php"><button type="button" class="btn btn-success">Cadastrar</button></a></h1>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Ano</th>
					<th scope="col">Valor</th>
					<th scope="col">Ações</th>
					<th scope="col"></th>
				</tr>
			</thead>

			<tbody>
				<?php				
					include "action/select.php";
					if($veiculos){
						foreach($veiculos as $veiculo){
							echo '<tr>';
								echo '<td>'.$veiculo['id'].'</td>';
								echo '<td>'.$veiculo['marca'].'</td>';
								echo '<td>'.$veiculo['modelo'].'</td>';	
								echo '<td>'.$veiculo['ano'].'</td>';
								echo '<td>'.$veiculo['valor'].'</td>';	
								echo '<td> <a href="action/delete.php?id='.$veiculo['id'].'"><button type="button" class="btn btn-danger">Deletar</button></a>'.'  '.'<a href="edit.php?id='.$veiculo['id'].'"><button type="button" class="btn btn-info">Editar</button></a></td>';		
							echo '</tr>';	
						}
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>