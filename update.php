<?php
session_start();
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




?>