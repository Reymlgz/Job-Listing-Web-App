<?php 
require '../helpers.php';


// Retrieve the requested URI from the server environment
$uri = $_SERVER['REQUEST_URI'];

require basePath('router.php');


?>