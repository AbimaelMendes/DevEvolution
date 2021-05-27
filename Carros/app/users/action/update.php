 <?php

  $dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

  require $dirProjeto . 'classes/db/MySQL.php';


  $MySQL = new MySQL();

  $DB = $MySQL->connectDB();

  $Id = $_GET;
  $id = $Id['id'];

  if (isset($Id['edit'])) {
    $edit = $Id['edit'];
  }
  

  $result = $MySQL->getForId($DB, 'user', $id);

  foreach ($result as $cli) {
    $email = $cli['email'];
    $senha = $cli['senha'];
    
  }

