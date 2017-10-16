<?php

namespace App\Models;

use App\Core\App;
use PDO;

class TypeProduct
{
  static $table = "type_product";

  public static function selectAll()
  {
    return App::get('database')->selectAll(TypeProduct::$table);
  }
}