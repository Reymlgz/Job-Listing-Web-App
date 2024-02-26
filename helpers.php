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

?>