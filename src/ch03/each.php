<?php
$prices = array( 'Tires'=>100 );
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;

$prices = array('Tires' => 100);
$prices['Oil'] = 10;
$prices['Spark Plugs']= 4;
// while ($element = each($prices)) {
//   echo $element['key'];
//   echo " - ";
//   echo $element['value'];
//   echo "<br />";
// }
// echo "<br />";
//**  不建议用each ** */


foreach ($prices as $key => $value){
    echo $key. " - ".$value."<br />";
}
echo "<br />";

// reset($prices);
// while (list($product, $price) = each($prices)){
//     echo "$product - $price<br />";
// }
?>