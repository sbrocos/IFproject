<?php

error_reporting(E_ALL);
//error_reporting = E_ALL | E_STRICT
ini_set('display_errors', '1');

// Define path to installation directory
if (! defined('BASE_PATH')) {
    define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
}

// Constante de la ruta a la carpeta /app
defined('APP_PATH')
|| define('APP_PATH', BASE_PATH . '/app');
// Constante de la ruta a la carpeta de /layout
defined('APP_PATH_LAYOUT')
|| define('APP_PATH_LAYOUT', APP_PATH . '/layouts');

include_once BASE_PATH.'/lib/IF/Application.php';

$application = new IF_APPLICATION();


?>

