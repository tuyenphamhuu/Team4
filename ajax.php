<?php
session_start();
 $color = $_REQUEST['color'];//Lay parameter tu request
 $sl = $_REQUEST['sl'];//Lay parameter tu request
 $id = $_REQUEST['id'];//Lay parameter tu request
$_SESSION['cart']['Color']=$color;
$_SESSION['cart']['Quantity']=$sl;
$_SESSION['cart']['ID_Product']=$id;

echo "color".$_SESSION['cart']['Color']." so luong " .$_SESSION['cart']['Quantity']." id ".$_SESSION['cart']['ID_Product'];
?>