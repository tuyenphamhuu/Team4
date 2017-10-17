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
  public static function insert($ProductName ,$NewPrice, $OldPrice, $Config, $description, $Image) 
  {
    App::get('database')->insert(Product::$table, [

      'ProductName'    => $ProductName,
      'NewPrice'       => $NewPrice,
      'OldPrice'       => $OldPrice,
      'ID_TypeProduct' => 1,
      'Config'         => $Config,
      'description'    => $description,
      'Image'    => $Image
    ]);
  }

  public static function getById($id) 
  {
    $sql = "select * from product where ID_Product={$id}";
    return App::get('database')->getById($sql);
  }

  public static function updateById($id, $params, $sql) 
  {
    App::get('database')->updateById(Product::$table, $params, $id, $sql);
  }


  public static function deleteById($sql) 
  {
    App::get('database')->deleteById($sql);
  }

  public static function selectByType($sql)
  {
    return App::get('database')->query($sql);
  }
}