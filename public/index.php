<?php 
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;

/* spl_autoload_register(function ($class) {
    // Build the path for the class file
    $path = basePath('Framework/' . $class . '.php');

    // Check if the class file exists
    if(file_exists($path)) {
        // If it does, require it
        require $path;
    }   
}); */

// Instatiating the router
$router = new Router();

//Get routes
$routes = require basePath('routes.php');

// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// Route the request
$router->route($uri);

?>