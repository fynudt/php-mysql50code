<?php
  // function fun_1() {
  //   $var = 0;
  //   echo "第一次输出变量var的值为：$var<br>";
  //   $var =2 ;
  //   echo "第二次输出变量var的值为：$var<br>
  //   ";
  // }
  // $var = 1;
  // fun_1();
  // echo "第三次输出变量var的值为：$var";
  // // function_name();
#引用传递
function increment (&$value,$amount =1 ){
  $value = $value +$amount;
}
$a = 10;
echo $a."<br>";
increment($a);
echo $a;


?>
