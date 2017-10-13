<?php

namespace App\Models;

use App\Core\App;
use PDO;

class Account
{
  static $table = "account";
  public $username;
  public $password;

  // get all users
  public static function selectAll()
  {
    // die('ee');
    return App::get('database')->selectAll(Account::$table);
  }
  
  // insert Account
  public static function insertUser($user, $pass, $rule, $email, $add, $phone) 
  {
    App::get ('database') -> insert(Account::$table, [
      'UserName'    => $user,
      'PassWord'  => md5($pass),
      'Rule_rank'   => $rule,
      'Email'       => $email,
      'Addr'        => $add,
      'PhoneNumber' => $phone
    ]);
    return view('admin/addUser');
    // App::get('database')->insert(Account::$table, $params);
  }
  // get Account by id
  public static function getById($id) 
  {
    return App::get('database')->getById(Account::$table, $id);
  }
  // update Account by id
  public static function updateById($id, $params) 
  {
    App::get('database')->updateById(Account::$table, $params, $id);
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
  public static function deleteById($id) 
  {
    App::get('database')->deleteById(Account::$table, $id);
  }
}