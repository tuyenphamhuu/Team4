<?php
session_start();
$color = $_REQUEST['color'];//Lay parameter tu request
$sl    = $_REQUEST['sl'];  //Lay parameter tu request
$id    = $_REQUEST['id']; //Lay parameter tu request

 $_SESSION['cart']= array(
    $id => array(
        "Color" => $color,
        "Quantity" => $sl
    )
 );
echo "<pre>";
	die(var_dump($_SESSION['cart']));
echo "</pre>";
?>