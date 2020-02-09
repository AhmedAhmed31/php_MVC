<?php

$router->get('', 'HomeController@index');
$router->get('login', 'AuthController@loginView');
$router->post('login', 'AuthController@login');
$router->get('register', 'AuthController@registerView');
$router->post('register', 'AuthController@register');
$router->get('profile', 'HomeController@profile');
$router->post('profile', 'HomeController@update');
$router->post('logout', 'HomeController@logout');
