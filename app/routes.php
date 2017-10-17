<?php

$router->get('', 'PagesController@index');
$router->get('iPhone', 'PagesController@iphone');
$router->get('Mac', 'PagesController@mac');
$router->get('iPad', 'PagesController@ipad');
$router->get('tv', 'PagesController@tv');
$router->get('watch', 'PagesController@watch');
$router->get('loginadmin', 'AccController@getLogin');
$router->get('admin/index', 'AccController@getIndex');
$router->post('postlogin', 'AccController@postLogin');
$router->get('indexUser','UsersController@selectAllUser');//tuyen
$router->get('admin/indexProduct','ProductController@selectAllProduct');//vu
$router->get('admin/addProduct','ProductController@showAddProduct');//vu
$router->post('addProduct', 'ProductController@addProduct');//vu
$router->get('admin/addUser', 'UsersController@getaddUser');
$router->post('addUser', 'UsersController@postaddUser');
$router->get('delUser', 'UsersController@getdelUser');//tuyen
$router->get('admin/editUser', 'UsersController@getEditUser');
$router->post('editUser', 'UsersController@postEditUser');

$router->post('users', 'ProductController@store');
$router->get('admin/editProduct', 'ProductController@showEditProduct');//vu
$router->get('detailProduct','PagesController@detailProduct');

$router->get('account','UsersController@account');
$router->get('product-rep','UsersController@product_rep');
$router->get('add-product','UsersController@add_product');
$router->get('product-detail','UsersController@product_detail');
$router->get('product','UsersController@product');
$router->get('order','UsersController@order');
$router->get('detail-order','UsersController@detail_order');
$router->get('rule','UsersController@rule');
$router->post('editProduct', 'ProductController@editProduct');//vu
$router->get('detailiPad', 'PagesController@detailiPad');//vu
$router->get('admin/delProduct', 'ProductController@showDelProduct');//vu
$router->post('delProduct', 'ProductController@delProduct');//vu
$router->get('order', 'PagesController@orderView');//vu