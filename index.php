<?php
require_once ("system/loader.php");

$uri = getUri();

$parts = explode('/', $uri);
if($uri == "/"){
    require_once ("mvc/view/page/home.php");
    exit;
}
$controller = $parts[1];
$method = $parts[2];

$params = array();
for($i=3; $i<count($parts); $i++){
    $params[] += $parts[$i];
}

$controllerClassName = ucfirst($controller) . "Controller";
$controllerFilePath = "mvc/controller/" . $controller . ".php";
require_once ($controllerFilePath);
$controllerInctance = new $controllerClassName;

call_user_func_array(array($controllerInctance, $method), $params);