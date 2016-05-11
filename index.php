<?php
date_default_timezone_set('Europe/Paris');
ini_set('default_charset','utf-8');
require_once 'CustomHttpClient.php';
require_once 'Router.php';

//The router class is the main entry point for interaction.
$router = new HSPDev\HuaweiApi\Router;

//If specified without http or https, assumes http://
$router->setAddress('192.168.2.1');

//Username and password. 
//Username is always admin as far as I can tell.
$router->login('admin', 'your-password');

var_dump($router->getLedStatus());
