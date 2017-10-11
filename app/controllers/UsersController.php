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
}
