<!DOCTYPE html>
<?php
  include '../../classes/session/session.php';
  //Session::validaSession(true);
?>
<html>
<head>
  <title>Cadastrar usuários</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar usuários</li>
          </ol>
      </nav>
    </div>
    <h1>Cadastrar usuário <a href="list.php"><button type="button" class="btn btn-success">Listar</button></a></h1>

    <form method="POST" action="action/save.php">
      <div class="form-group">
        <small class="form-text text-muted">Digite um email válido</small>
      </div>

      <div class="row">
        <div class="col">
          <input type="email" name="email" required class="form-control" placeholder="Email....">
        </div>

        <div class="col">
          <input type="text" name="senha" required class="form-control" placeholder="Senha....">
        </div>

        <div class="col">
          <input type="text" name="confirmaSenha" required class="form-control" placeholder="Confirmar Senha....">
        </div>

      </div>

      <br>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <?php
        if(isset($_GET['senha'])){
          $senha = $_GET['senha'];
          if ($senha == '1') {
            echo '<div class="alert alert-warning" role="alert">
                    Senhas não são iguais!
                  </div>'; 
          }
        }

        if(isset($_GET['jaexiste'])){
          $email = $_GET['jaexiste'];
          if ($email == 'true') {
            echo '<div class="alert alert-warning" role="alert">
                    Email ja cadastrado!
                  </div>'; 
          }
        }  
      ?>        
    </form>
  </div>
</body>
</html>
