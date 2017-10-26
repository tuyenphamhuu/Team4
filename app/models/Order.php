<?php

namespace App\Models;

use App\Core\App;

class Order
{
  static $table = "order";

  public static function selectAll()
  {
    return App::get('database')->selectAll(Account::$table);
  }
  
  public static function insert($add, $total, $phone, $email, $name) 
  {
    App::get('database')->insert(Order::$table, [
      
      'Add'         => $add,
      'Total'       => $total,
      'PhoneNumber' => $phone,
      'Email'       => $email,
      'UserName'    => $name
    ]);
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