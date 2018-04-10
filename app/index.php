<?php 

require 'controller/Router.php';
require 'config/config.php';

$router = new Router();
$router->routeRequest();