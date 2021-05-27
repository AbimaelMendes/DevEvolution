
<!DOCTYPE html>
<?php
	include '../../classes/session/session.php';
	Session::validaSession(true);
?>
<html>
<head>
	<title>Listar usuários</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div>
			<nav aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Listar usuários</li>
  				</ol>
			</nav>	
		</div>
		<h1>Visualizar <a href="new.php"><button type="button" class="btn btn-success">Cadastrar</button></a></h1>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Email</th>
					<th scope="col">Senha</th>
                    <th scope="col">Ações</th>
					
				</tr>
			</thead>

			<tbody>
				<?php				
					include "action/select.php";
					if($usuario){
						foreach($usuario as $usuario){
							echo '<tr>';
								echo '<td>'.$usuario['id'].'</td>';
								echo '<td>'.$usuario['email'].'</td>';
								echo '<td>'.$usuario['senha'].'</td>';	
								echo '<td> <a href="action/delete.php?id='.$usuario['id'].'"><button type="button" class="btn btn-danger">Deletar</button></a>'.'  '.'<a href="edit.php?id='.$usuario['id'].'"><button type="button" class="btn btn-info">Editar</button></a></td>';		
							echo '</tr>';	
						}
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>
