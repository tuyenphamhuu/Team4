<?php

$arC=array
(
    0 => array
        (
            0 =>  1,
            1 =>  11,
            2 => 'Space Gray',
            3 =>  1,
            4 => '12.9-inch iPad Pro 512GB',
            5 =>  1149,
            6 => 'ipad-pro-12in-512GB.png',
            7 => '11Space Gray',
        ),

    1 => array
        (
            0 =>  2,
            1 =>  11,
            2 => 'Space Gray',
            3 =>  7,
            4 => '12.9-inch iPad Pro 512GB',
            5 =>  1149,
            6 => 'ipad-pro-12in-512GB.png',
            7 => '11Space Gray',
        ),

    2 => array
        (
            0 => 3,
            1 => 12,
            2 => 'Rose Gold',
            3 => 2,
            4 => '12.9-inch iPad Pro 256GB',
            5 => 949,
            6 => 'ipad-pro-12in-256GB.png',
            7 => '12Rose Gold',
        ),

    3 => array
        (
            0 => 4,
            1 => 12,
            2 => 'Rose Gold',
            3 => 5,
            4 => '12.9-inch iPad Pro 256GB',
            5 => 949,
            6 => 'ipad-pro-12in-256GB.png',
            7 => '12Rose Gold',
        ),

    4 => array
        (
            0 =>  5,
            1 =>  11,
            2 => 'Space Gray',
            3 =>  1,
            4 => '12.9-inch iPad Pro 512GB',
            5 =>  1149,
            6 => 'ipad-pro-12in-512GB.png',
            7 => '11Space Gray',
        ),
    5 => array
        (
            0 => 6,
            1 => 12,
            2 => 'Rose Gold',
            3 => 5,
            4 => '12.9-inch iPad Pro 256GB',
            5 => 949,
            6 => 'ipad-pro-12in-256GB.png',
            7 => '12Rose Gold',
        ),

);
echo "<pre>";
print_r($arC);
echo "</pre>";



$idtrung="";
$tgtrung="";
$trung="";
//$i[]=array();$j[]=array();
$stt=0;
$r=0;


//cac phan tu co trong mảng

for($t=0;$t<count($arC);$t++){
    $uniq = array_flip($arC);
}
echo "<pre>";
print_r($uniq);
echo "</pre>";



  for($t=$r;$t<count($arC);$t++){
      $i=$arC[$t];
    for($k=$r+1;$k<count($arC);$k++){
      $j=$arC[$k];
      if($i[7] == $j[7]){
        $idtrung.=$stt;
        $arC[$stt];
      }else{
        break;
      }
      $stt++;
      $r=$stt+1;
    }
    $trung.=$idtrung."|";
        
  }



?>