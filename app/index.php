<?php 

require 'controller/Router.php';
require 'config.php';
// require 'config/dotEnvConfig.php';

$router = new Router();
$router->routeRequest();