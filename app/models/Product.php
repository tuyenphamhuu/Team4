<?php

namespace App\Models;

use App\core\App;

class Product
{
  static $table = "product";

  // get all users
  public static function selectAll()
  {
    return App::get('database')->selectAll(Product::$table);
  }
  
  // insert User
  public static function insert($role_id ,$first_name, $last_name , 
  $email, $password) 
  {
    App::get('database')->insert(Product::$table, [
      'role_id'    => $role_id,
      'first_name' => $first_name,
      'last_name'  => $last_name,
      'email'      => $email,
      'password'   => $password,
    ]);
  }
  // get User by id
  public static function getById($id) 
  {
    return App::get('database')->getById(Product::$table, $id);
  }
  // update User by id
  public static function updateById($id, $params) 
  {
    App::get('database')->updateById(Product::$table, $params, $id);
  }

  // delete User by id
  public static function deleteById($id) 
  {
    App::get('database')->deleteById(Product::$table, $id);
  }
}