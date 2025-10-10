<?php
session_start();

use App\Core\App;

require_once '../vendor/autoload.php'; // for composer autoload all clasees in app/ folder
require_once '../app/core/init.php';

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();