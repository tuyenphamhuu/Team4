<?php

namespace App\Controllers;
use App\Core\App;
use App\Models\Product;

use App\Models\TypeProduct;

class PagesController
{

  public function index()
  {
    //session_start();
    $_SESSION['data'] = TypeProduct::selectAll();
    return view('index');
  }

  public function iphone()
  {
    $id = $_GET['id'];
    $sql = " SELECT * FROM product WHERE ID_TypeProduct = '{$id}'";
    $products = Product::selectByType($sql);
    return view('iphone', ['products' => $products ]);
  }

  public function ipad()
  {
    $id = $_GET['id'];
    $sql = " SELECT * FROM product WHERE ID_TypeProduct = '{$id}'";
    $products = Product::selectByType($sql);
    return view('ipad', ['products' => $products ]);
  }
  public function mac()
  {
    return view('mac');
  }
  public function tv()
  {
    return view('tv');
  }
  public function watch()
  {
    return view('watch');
  }
  public function admin()
  {
    return view('signin');
  }

  public function detailiPad()
  {
    return view('detail-iPad');
  }
}
