<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/18 0018
 * Time: 上午 9:22
 */

$products = array( 'Tires', 'Oil','Spark Plugs');
sort($products);
echo implode(", ",$products)."<br />";

// $odds = range('a','z');
// echo implode(",",$odds);
// echo '<br />';
// foreach( $odds as $key => $value ){
//     echo $key. " - ".$value."<br />";
// }


$prices = array( 100, 10 ,4);
sort($prices);
echo implode(" ",$prices)."<br />";

$prices = array( 'Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);
rsort($prices);
echo implode(" ", $prices)."<br />";

$prices = array( 'Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);
ksort($prices);
echo implode(" ", $prices)."<br />";
?>