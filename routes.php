<?php

$router->get('', 'HomeController@index');
$router->get('login', 'AuthController@loginView');
$router->post('login', 'AuthController@login');
$router->get('register', 'AuthController@registerView');
$router->post('register', 'AuthController@register');
