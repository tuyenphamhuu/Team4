<?php

$router->get('', 'PagesController@index');
$router->get('iphone', 'PagesController@iphone');
$router->get('mac', 'PagesController@mac');
$router->get('ipad', 'PagesController@ipad');
$router->get('tv', 'PagesController@tv');
$router->get('watch', 'PagesController@watch');
$router->get('admin', 'PagesController@admin');

$router->post('users', 'UsersController@store');
