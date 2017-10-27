<?php

namespace App\Controllers;
use App\Core\App;
use App\Models\Product;

use App\Models\TypeProduct;
use App\Models\Order;

class PagesController
{

  public function index()
  {
    //session_start();
    $_SESSION['data'] = TypeProduct::selectAll();
    $sqlIphone        = " SELECT * FROM product WHERE ID_TypeProduct = '1' ORDER BY ID_Product DESC LIMIT 4";
    $iphones          = Product::selectByType($sqlIphone); 
    $sqlIpad          = " SELECT * FROM product WHERE ID_TypeProduct = '2' ORDER BY ID_Product DESC LIMIT 4";
    $ipads            = Product::selectByType($sqlIpad); 
    return view('index', ['iphones' => $iphones, 'ipads' => $ipads]); 
  }

  public function iphone()
  {
    $id       = $_GET['id'];
    $sql      = " SELECT * FROM product WHERE ID_TypeProduct = '{$id}' ORDER BY ID_Product DESC";
    $products = Product::selectByType($sql);
    return view('iphone', ['products' => $products ]);
  }

  public function ipad()
  {
    $id  = $_GET['id'];
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
    $id  = $_GET['idProduct'];
    $sql = " SELECT * FROM product as p INNER JOIN color as c ON p.ID_Product = c.ID_Product  WHERE p.ID_Product   = $id ";
    $products  = Product::selectByType($sql);
    $idtype    = $_GET['type'];
    $sqltype   = " SELECT * FROM product WHERE ID_TypeProduct = $idtype ORDER BY RAND() LIMIT 4 ";
    $moreprd   = Product::selectByType($sqltype);
    return view('detail-iPad', ['products' => $products, 'moreprd' => $moreprd ]);
  }

  // public function orderView()
  // {
  //   return view('order');
  // }

  public function mycart()
  {
    if (isset($_SESSION['cart'])){
      $arCs=$_SESSION['cart'];
    }else{
      $arCs=array();
    }
    // echo "<pre>";
    //   print_r($arC);
    // echo "</pre>";

    
    return view('mycart',['arC' => $arCs ]);
  }
  public function orderCustomer()
  {
    if (isset($_POST['submit'])) {
      $param = [
        'OrderDate'   => $_POST['date'],
        'Email'       => $_POST['email'],
        'Add'         => $_POST['add'],
        'Orderer'     => $_POST['name'],
        'PhoneNumber' => $_POST['phone']
      ];
    }
  }
  public function seach()
  {
    $name     = $_POST['aname'];
    $sql      = " SELECT * FROM product WHERE ProductName LIKE '%{$name}%' ORDER BY ID_Product DESC ";
    $results  = Product::selectByType($sql); 
    return view('seach', ['results' => $results]);    
  }
}
