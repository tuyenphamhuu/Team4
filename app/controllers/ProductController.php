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
    move_uploaded_file($_FILES['Image']['tmp_name'],"public/images/".$_FILES['Image']['name']); 
    Product::insert($_POST['ProductName'],
      $_POST['NewPrice'],
      $_POST['OldPrice'],
      $_POST['Config'],
      $_POST['description'],
      $_FILES['Image']['name']
    );

    return redirect('admin/indexProduct');
  }
  
  public function showEditProduct() 
  {
    $product = Product::getById($_GET['id']);
    return view('admin/editProduct',['product' => $product]);
  }

  public function showDelProduct() 
  {
    $product = Product::getById($_GET['id']);
    return view('admin/delProduct',['product' => $product]);
  }

  public function editProduct() 
  {
    $id = $_POST['ID_Product'];
    if ($_FILES['Image']['name'] == ''){
      $params = [
        'ProductName'  => $_POST['ProductName'],
        'NewPrice'     => $_POST['NewPrice'],
        'OldPrice'     => $_POST['OldPrice'],
        'ColorProduct' => $_POST['ColorProduct'],
        'Config'       => $_POST['Config'],
        'description'  => $_POST['description']
        ];
    }else{
      $params = [
    'ProductName'      => $_POST['ProductName'],
    'NewPrice'         => $_POST['NewPrice'],
    'OldPrice'         => $_POST['OldPrice'],
    'ColorProduct'     => $_POST['ColorProduct'],
    'Config'           => $_POST['Config'],
    'description'      => $_POST['description'],
    'Image'            => $_FILES['Image']['name']
    ];
    move_uploaded_file($_FILES['Image']['tmp_name'],"public/images/".$_FILES['Image']['name']);
    }
    
    $sql = 'update %s set %s where ID_Product=%s';
    Product::updateById($id, $params, $sql);

    return redirect('admin/indexProduct');
  }


  public function delProduct() 
  {
    $id = $_POST['ID_Product'];
    $sql="delete from product where ID_Product={$id}";
    Product::deleteById($sql);
    return redirect('admin/indexProduct');
  }

}