<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Account;

class UsersController
{
  public function index ()
  {
    $users = App::get('database')->selectAll ('users');

    return view('users', compact('users'));
  }

  public function store () 
  {
    App::get('database')->insert('users', [
      'name' =>$_POST['name']
    ]);

    return redirect('users');
  }

  public function selectAllUser ()
  {
     $user = Account::selectAll();

     return view('admin/indexUser',['user' => $user ]);
  }

  public function account ()
  {
    return view('admin/account');
  }

  
  public function getaddUser()
  {
    return view('admin/addUser');
  }
  public function postaddUser()
  {
    Account::insertUser($_POST['user'],$_POST['pass'],$_POST['rule'], $_POST['email'], $_POST['add'], $_POST['phone']);
  /*  $params = [
      'UserName' => $_POST['user'],
      'PassWord' => $_POST['pass'],
      'Rule_rank' => $_POST['rule'],
      'Email' => $_POST['email'],
      'Addr' => $_POST['add'],
      'PhoneNumber' => $_POST['phone']
    ];
    Account::insertUser($params);*/
  }
  public function getEditUser()
  {
    $id   = $_GET['id'];
    $user = Account::getById($id);
    return view ('admin/editUser',['user' => $user]);
  }
  public function postEditUser()
  {
    
    die($id);
    $user = Account::getByIdUser($id);
  } 
}
