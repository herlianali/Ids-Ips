<?php

header("Content-Type Application/json");

include 'crud.class.php';
include 'Route.php';

//defined class
$call = new Crud();
use Routing\Route;

Route::add('/', function() {
  echo $GLOBALS['call']->showAll();
}, 'GET');

?>
