<?php
session_start();
$color = $_REQUEST['color'];//Lay parameter tu request
$sl = $_REQUEST['sl'];//Lay parameter tu request
$id = $_REQUEST['id'];//Lay parameter tu request

// $_SESSION['cart']['color']=$color;
// $_SESSION['cart']['sl']=$sl;
// $_SESSION['cart']['id']=$id;



 //echo "So luong ".$_SESSION['color'];
 $_SESSION['stt']++;
 $_SESSION['data']=$_SESSION['stt']."-".$id."-".$color."-".$sl."|";
 $_SESSION['cart'].=$_SESSION['data'];

//  $_SESSION['cart']= array(
//     $id => array(
//         "Color" => $color,
//         "Quantity" => $sl
//     )
// );
echo "<pre>";
die(var_dump($_SESSION['cart']));
echo "</pre>";
//echo "mau ne".$_SESSION['cart']['color'];
?>