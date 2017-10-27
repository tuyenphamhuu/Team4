<?php
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