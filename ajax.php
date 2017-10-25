<?php
session_start();
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
    $stt=0;
    foreach ($arrcart as $key =>$values) {
        $var=array_keys($values);// lấy tất cả các key của array
        $k =array_shift($var);// Lấy key đầu tiên
        if($k == $idcolor){
            $arrcart[$key][$k]['sl']= $values[$k]['sl']+ $sl;
            $true="1";
        }
        $stt++;
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



?>