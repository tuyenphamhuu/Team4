<?php

$router->get('', 'PagesController@index');
$router->get('iphone', 'PagesController@iphone');
$router->get('mac', 'PagesController@mac');
$router->get('ipad', 'PagesController@ipad');
$router->get('tv', 'PagesController@tv');
$router->get('watch', 'PagesController@watch');
$router->get('loginadmin', 'AccController@getLogin');
$router->get('admin/index', 'AccController@getIndex');
$router->post('postlogin', 'AccController@postLogin');
$router->get('indexUser','UsersController@selectAllUser');
$router->get('admin/indexProduct','ProductController@selectAllProduct');
$router->get('admin/addProduct','ProductController@showAddProduct');//vu
$router->post('addProduct', 'ProductController@addProduct');//vu
$router->get('admin/addUser', 'UsersController@getaddUser');
$router->post('addUser', 'UsersController@postaddUser');

$router->post('users', 'ProductController@store');
// $router->post('singin', 'UsersController@sign-in');
