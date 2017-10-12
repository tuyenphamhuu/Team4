<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Account;

class UsersController
{
  public function index()
  {
    $users = App::get('database')->selectAll('users');

    return view('users', compact('users'));
  }

  public function store() 
  {
    App::get('database')->insert('users', [
      'name' => $_POST['name']
    ]);

    return redirect('users');
  }
  public function selectAllUser()
  {
     $user = Account::selectAll();

     return view('admin/indexUser',['user' => $user ]);
  }
  public function getaddUser()
  {
    return view('admin/addUser');
  }
  public function postaddUser()
  {
    $user = Account::insertUser($_POST['user'],$_POST['pass'],$_POST['rule'], $_POST['email'], $_POST['add'], $_POST['phone']);
  }
}
