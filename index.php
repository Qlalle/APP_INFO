<php
define('WEBROOT', str_remplace('index.php, '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_remplace('index.php, '', $_SERVER['SCRIPT_FILENAME']));

require(ROOT,'core/model.php');
require(ROOT,'core/controller.php');

$params = explode('/', $GET['p']);
$controller = params[0];
$action = isset( $params[1]) ? $params[1] : 'index';

require('controllers/'.$controller.'.php');
$controller = new $controller();
if (methode_exists($controller, $action)){
    $controller->$action();
}
else{
echo 'erreur 404';
}
?>