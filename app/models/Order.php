<?php

namespace App\Models;

use App\Core\App;
use PDO;

class Account
{
  static $table = "order";

  public static function selectAll()
  {
    return App::get('database')->selectAll(Account::$table);
  }
  public static function insert($params) 
  {
    
    App::get('database')->insert(Account::$table, $params);
    return view('admin/indexUser');

  }
  // get Account by id
  public static function getById($id) 
  {
    $sql = "select * from account where ID_Account ={$id}";
    return App::get('database')->getById($sql);
  }
  // update Account by id
  public static function updateById($id, $params, $sql) 
  {
    App::get('database')->updateById(Account::$table, $params, $id, $sql);
  }

  // check login
  public static function checkLogin($user, $pass) 
  {
    $table = Account::$table;
    $sql = "SELECT * FROM {$table} WHERE UserName='{$user}' AND PassWord='{$pass}'";
    $user = App::get('database')->query($sql);
    return $user[0];
  }
  // delete User by id
  public static function deleteById($sql) 
  {
    App::get('database')->deleteById($sql);
  }
}