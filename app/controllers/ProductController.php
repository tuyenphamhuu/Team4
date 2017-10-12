<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Product;

class ProductController
{
//   public function index()
//   {
//     $users = App::get('database')->selectAll('users');

//     return view('users', compact('users'));
//   }

//   public function store() 
//   {
//     App::get('database')->insert('users', [
//       'name' => $_POST['name']
//     ]);

//     return redirect('users');
//   }

  public function selectAllProduct()
  {
     $products = Product::selectAll();

     return view('admin/indexProduct',['products' => $products ]);
  }

  public function showAddProduct(){
    return view('admin/addProduct');
  }

  public function addProduct() 
  {
    Product::insert('product', [
      'ProductName' => $_POST['ProductName'],
      'NewPrice' => $_POST['NewPrice'],
      'OldPrice' => $_POST['OldPrice'],
      'ColorProduct' => $_POST['ColorProduct'],
      'Config' => $_POST['Config'],
      'description' => $_POST['description'],
    ]);

    return redirect('admin/indexProduct');
  }
}