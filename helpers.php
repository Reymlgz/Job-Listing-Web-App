<?php 
/**
 * Get the base path
 * @param string $path
 * @return string
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
function loadView($name, $data = []) {
    $viewPath = basePath("App/views/{$name}.view.php");

    if(file_exists($viewPath)){
        extract($data);
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
    }
}
/**
 * Load Partials
 * 
 * @param string $name
 * @return void
 * 
 */
function loadPartials($name, $data = []) {
    $partialPath = basePath("App/views/partials/{$name}.php");

    if(file_exists($partialPath)){
        extract($data);
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


/**
 * Format Salary
 * 
 * @param string $salary
 * @return string Formatted salary
 */

 function formatSalary($salary) {
    return '$' . number_format(floatval($salary));
    
 }

  /**
  * Sanitize data
  *@param string $dirty
  *@return string
  */

  function sanitize($dirty){
  return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
  }
  
  /**
   * Redirect to a given URL 
   * 
   * @param string $url
   * @return void
   */

   function redirect($url){
    header("Location: {$url}");
   }

?>