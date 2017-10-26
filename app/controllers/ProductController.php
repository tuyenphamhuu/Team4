<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Product;
use App\Models\TypeProduct;

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
    $type = TypeProduct::selectAll();
    return view('admin/addProduct',['types' => $type]);
  }

  public function addProduct() 
  {
    move_uploaded_file($_FILES['Image']['tmp_name'],"public/images/".$_FILES['Image']['name']);
    if($_FILES['Image']['name']==''){
      $image='knowledge_graph_logo.png';
    }else{
      $image=$_FILES['Image']['name'];
    }
    Product::insert($_POST['ProductName'],
      $_POST['NewPrice'],
      $_POST['OldPrice'],
      $_POST['Type_Product'],
      $_POST['Config'],
      $_POST['description'],
      $image
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
        'Config'       => $_POST['Config'],
        'description'  => $_POST['description'],
        ];
    }else{
      $params = [
    'ProductName'      => $_POST['ProductName'],
    'NewPrice'         => $_POST['NewPrice'],
    'OldPrice'         => $_POST['OldPrice'],
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

  public function ajaxAddProduct() 
  {
    $color = $_REQUEST['color'];//Lay parameter tu request
    $sl    = $_REQUEST['sl'];//Lay parameter tu request
    $id    = $_REQUEST['id'];//Lay parameter tu request
    $name  = $_REQUEST['name'];//Lay parameter tu request
    $price = $_REQUEST['price'];//Lay parameter tu request
    $image = $_REQUEST['image'];//Lay parameter tu request
    $idcolor=$id.$color;
    $array["$idcolor"]= array(
    
            "id"       => "$id",
            "name"     => "$name",
            "color"    => "$color",
            "sl"       => "$sl",
            "price"    => "$price",
            "image"    => "$image",
    
    );
    if (isset($_SESSION['cart'])){
        $arrcart=$_SESSION['cart'];
        foreach ($arrcart as $key =>$values) {
            $var=array_keys($values);// lấy tất cả các key của array
            $k =array_shift($var);// Lấy key đầu tiên
            if($k == $idcolor){
                $arrcart[$key][$k]['sl']= $values[$k]['sl']+ $sl;
                $true="1";
                break;
            }
        }
        if($true=="1"){
          $_SESSION['cart']=$arrcart;
        }else{
          $_SESSION['cart'][]=$array;
        }
    }
    else{
        $_SESSION['cart'][]=$array;
    }
    return view('/detailProduct');
  }

  public function ajaxUpdateProduct() 
  {
    $idcolor = $_REQUEST['idcolor'];//Lay parameter tu request
    $quantity = $_REQUEST['quantity'];//Lay parameter tu request
    
    if (isset($_SESSION['cart'])){
        $arrcart=$_SESSION['cart'];
        //$stt=0;
        foreach ($arrcart as $key =>$values) {
            $var=array_keys($values);// lấy tất cả các key của array
            $k =array_shift($var);// Lấy key đầu tiên
            if($k == $idcolor){
                $arrcart[$key][$k]['sl']=  $quantity;
                $true="1";
            }
            $stt++;
        }
        if($true=="1"){
            $_SESSION['cart']=$arrcart;
        }  
    }
    
    return redirect('/mycart');
  }

  public function ajaxDeleteProduct() 
  {
    $idcolor = $_REQUEST['idcolor'];//Lay parameter tu request
    if (isset($_SESSION['cart'])){
        $arrcart=$_SESSION['cart'];
        foreach ($arrcart as $key =>$values) {
            $var=array_keys($values);// lấy tất cả các key của array
            $k =array_shift($var);// Lấy key đầu tiên
            if($k == $idcolor){
                unset($arrcart[$key]);
                $true="1";
                $_SESSION['cart']=$arrcart;
            }
        }
    
    }
    return redirect('/mycart');
  }
}