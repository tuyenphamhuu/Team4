<?php

$router->get('', 'PagesController@index');
$router->get('iphone', 'PagesController@iphone');
$router->get('mac', 'PagesController@mac');
$router->get('ipad', 'PagesController@ipad');
$router->get('tv', 'PagesController@tv');
$router->get('watch', 'PagesController@watch');
$router->get('loginadmin', 'AccController@getLogin');
$router->get('adminindex', 'AccController@getIndex');
$router->post('postlogin', 'AccController@postLogin');

$router->post('users', 'UsersController@store');
// $router->post('singin', 'UsersController@sign-in');
