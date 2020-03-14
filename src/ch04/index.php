<?php
// $num = 5;
// if ($num > 4) {
// if($num<10){
//     echo "此数字大于4并且小于10";
// }elseif {
//     echo ""
// }

// }
//     $num =5;
// if($num > 4 || $num <10){
//     echo "大于4或者小于10";
// }
#数组是存储多个数值的变量
/*
    -下标数组
    -关联数组
    */


#下标数组

            // $people = array("Kevin", "Henry", "Bucky");
            // // print($people[2]);
            // $cars = ["Honda", "Toyota", "Ford"];
            // // // echo $cars[0];
            // $cars[3] = "Bence";
            // $cars[] = "BMW";
            // // for ($i=0; $i <count($cars) ; $i++) {
            // //     echo $i.' '.$cars[$i].'<br>';}
            // foreach($cars as $car){
            //     echo $car.'<br>';
            // } 

                
#关联数组

        // $ids = [ 22 => "Henry",30=>"Bucky",29 =>"Brad"];
        // echo $ids[30];

#循环
/*
        -for
        -while
        -Do while
        -Foreach
    */
#For 循环
#@params -init,condition ,inc
        // for ( $i = 0 ;$i<10;$i++ )
        // {
        //     echo $i;
        //     echo "<br>";
            
        // }
#While 循环
#@params -condition
        // $i=0;
        // while($i<10){
        //     echo "$i";
        //     echo '<br>  ';
        //     $i++;
        // }

#foreach 循环
#@params $variable as $key =>$value
// $people=[
//     "Henry" => " Henry@gmail.com",
//     "Bucky" => " Bucky@gmail.com",
//     "Earyl" => " Earyl@gmail.com",
//     "Tom" => " Tom@gmail.com",
//     "George" => " George@gmail.com"

// ];
// foreach ($people as $person => $email) {
//     echo $person.':'.$email.'<br>';
// }

$strings='"<ddfsdfjefjowf>"'.'/br';
echo htmlspecialchars($strings) ;

