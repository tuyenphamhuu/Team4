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
  
  public static function insert($ProductName ,$NewPrice, $OldPrice , 
  $ColorProduct, $Config, $description) 
  {
    App::get('database')->insert(ProductController::$table, [
      'ProductName' => $ProductName,
      'NewPrice' => $NewPrice,
      'OldPrice' => $OldPrice,
      'ColorProduct' => $ColorProduct,
      'Config' => $Config,
      'description' => $description,
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