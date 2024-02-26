<?php 
/**
 * Get the base path
 * @param string $path
 * @return string
 * 
 * Assuming the current file is located in '/var/www/html/'
 * echo basePath('images'); // Output: '/var/www/html/images'
 *
 */
function basePath($path = ''){
    return __DIR__ . '/' . $path;
}

/**
 * Load View
 * 
 * @param string $name
 * @return void
 * 
 */
function loadView($name) {
    $viewPath = basePath("views/{$name}.view.php");

    if(file_exists($viewPath)){
        require $viewPath;
    } else {
        echo "Load-View '{$name} not found!'";
    }
}

/**
 * Load Partials
 * 
 * @param string $name
 * @return void
 * 
 */
function loadPartials($name) {
    $partialPath = basePath("views/partials/{$name}.php");

    if(file_exists($partialPath)){
        require $partialPath;
    } else {
        echo "Load-Partial-View '{$name} not found!'";
    }
}


/** /------Helper Functions to show the path folders ----/
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */

 function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
 }
/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */

 function inspectAndDie($value){
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
 }
//------Ends Helper Functions to show the path folders ----/
?>