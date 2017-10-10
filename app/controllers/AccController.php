<?php
namespace App\Controllers;

class AccController
{

  // public function postLogin()
  // {
  //   $username = $_POST['username'];
  //   $password = md5($_POST['password']);
  //   $user = LoginModel::checkLogin($username, $password);
  //   if(\sizeof($user) == 0) {
  //     return redirect('signin');
  //   }
  //   \session_start();
  //   $_SESSION['username'] = $user;
    
  //   return \redirect('admin/index');
  // }


  public function getLogin()
  {
    return view('admin/signin');
  }


  // public function getLogout()
  // {
  //   session_start();
  //   session_destroy();
  //   return view('admin/login');
  // }

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
}
