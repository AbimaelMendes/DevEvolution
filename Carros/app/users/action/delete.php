<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT']. '/Carros/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();

$DB = $MySQL->connectDB();

$id = addslashes($_GET['id']);

$MySQL ->deleteById($DB, 'user', $id);

header('Location: ../list.php');