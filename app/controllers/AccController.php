<?php
namespace App\Controllers;
use App\Models\Account;

class AccController
{

  public function postLogin()
  {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $user = Account::checkLogin($username, $password);
    if(!isset($user)) {
      return redirect('loginadmin');
    }
    session_start();
    $_SESSION['user'] = $user;
    
    return redirect('admin/indexProduct');
  }



  public function getLogin()
  {
    return view('admin/signin');
  }

  public function getIndex()
  {
    return view('admin/index');
  }
  public function logout()
  {
    unset($_SESSION['user']);
    return redirect('loginadmin');
  }

  // public function index()
  // {
  //   $users = App::get('database')->selectAll('users');

  //   return view('users', compact('users'));
  // }

  // public function store()
  // {
  //   App::get('database')->insert('users', [
  //     'name' => $_POST['name']
  //   ]);

  //   return redirect('users');
  // }
  public static function checkLogin()
  {
    if (!isset($_SESSION['user'])) {
      return redirect('loginadmin');
    }
  }
}
