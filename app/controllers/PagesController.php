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
  public function order()
  {
    if(isset($_SESSION['cart'])){
			// echo "<pre>";
			// 	print_r($_SESSION['cart']);
			// echo "</pre>";
			$arrcart=$_SESSION['cart'];
			$total=0;
			foreach ($arrcart as $key =>$values) {
				$var=array_keys($values);// lấy tất cả các key của array
				$k =array_shift($var);// Lấy key đầu tiên
					$total += +($arrcart[$key][$k]['sl']*$arrcart[$key][$k]['price']);
        }
        return view('order',['total' => $total]); 
			}
    return view('order');
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
   
      $add   =$_POST['add'];
      $total =$_POST['total'];
      $phone =$_POST['phone'];
      $email =$_POST['email'];
      $name  =$_POST['name'];
      $param = [
        'Addr'         => $add,
        'Total'       => $total,
        'PhoneNumber' => $phone,
        'Email'       => $email,
        'UserName'    => $name
      ];
      //echo $add. $total. $phone. $email. $name;
      //INSERT INTO `order`(`ID_Order`, `Add`, `Total`, `PhoneNumber`, `Email`, `UserName`)
      echo  Order::insertOrder($param);
      //redirect("iPhone");
  
  }

  


  public function seach()
  {
    $name     = $_POST['aname'];
    $sql      = " SELECT * FROM product WHERE ProductName LIKE '%{$name}%' ORDER BY ID_Product DESC ";
    $results  = Product::selectByType($sql); 
    return view('seach', ['results' => $results]);    
  }
}
