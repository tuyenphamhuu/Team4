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

  public function detailProduct()
  {
    $id = $_GET['idProduct'];
    $sql = " SELECT * FROM product as p INNER JOIN color as c ON p.ID_Product = c.ID_Product  WHERE p.ID_Product = $id ";
    $products = Product::selectByType($sql);

    return view('detail-iPad', ['products' => $products]);
  }

  // public function orderView()
  // {
  //   return view('order');
  // }

  public function mycart()
  {
    if (isset($_SESSION['cart'])){
      $array = rtrim($_SESSION['cart'],'|');
      $arrayCards = explode("|",$array);
      foreach($arrayCards as $items){
        $arC[] = explode("+",$items);
      }
    }






    echo "<pre>";
      print_r($arC);
    echo "</pre>";




    

    return view('mycart', [ 'arC' => $arC ]);
  }
}
