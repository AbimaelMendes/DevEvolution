<?php
  include 'classes/session/session.php';
  Session::validaSessionLogin();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cadastro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <form class="form-signin" method="POST" action="app/login/login.php">
      <img class="mb-4" src="img/logo.png" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Por favor entre</h1>
      <label for="inputEmail" class="sr-only">Endereço de Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" required autofocus name="email">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembre-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <br>
      <button class="btn btn-lg btn-secundary btn-block text-white bg-dark" type="button" onclick="location='app/users/new.php'" >Cadastre-se</button>

      <?php
        if(isset($_GET['erro'])){
          $erro = $_GET['erro'];
          if($erro == 1){
            echo '<div class="alert alert-danger" role="alert">
                    Email ou senha inválida!
                  </div>';  
          }    
        }

        if(isset($_GET['logout'])){
        	if($_GET['logout'] == true){
         		echo '<div class="alert alert-warning" role="alert">
                    Saiu com sucesso!
                  </div>';  
            }      
        }

        
        if(isset($_GET['permissao'])){
        	if ($_GET['permissao'] == 'false') {
          		echo '<div class="alert alert-warning" role="alert">
                    você não tem permissão para acessar!
                  </div>';  
            }      
        }
      ?>  
      <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>

    </form>

  </body>
</html>

      
