<?php 

$routes = require basePath('routes.php');

if(array_key_exists($uri, $routes)){
    require(basePath($routes[$uri]));
} else {
    http_response_code(404); //Force the response code 404 error
    require basePath($routes['404']);
}


?>