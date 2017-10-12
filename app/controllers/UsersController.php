<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Account;

class UsersController
{
  public function index ()
  {
    $users = App::get('database')->selectAll('users');

    return view('users', compact('users'));
  }

  public function store () 
  {
    App::get('database')->insert('users', [
      'name' => $_POST['name']
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

  public function product_rep ()
  {
    return view('admin/product-rep');
  }

  public function add_product ()
  {
    return view('admin/add-product');
  }

  public function product_detail ()
  {
    return view('admin/product-detail');
  }

  public function product ()
  {
    return view('admin/product');
  }

  public function order ()
  {
    return view('admin/order');
  }

  public function detail_order ()
  {
    return view('admin/detail-order');
  }

  public function rule ()
  {
    return view('admin/rule');
  }


}
