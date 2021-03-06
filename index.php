<?php
session_start();
require('./vendor/autoload.php');
require './src/Utils/util.php';
use App\Utils\{Request, Router};
Router::load('./routes.php')
    ->direct(Request::uri(), Request::method());
