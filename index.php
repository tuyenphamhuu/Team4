<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());
