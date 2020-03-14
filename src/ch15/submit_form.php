<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/20
 * Time: 21:22
 */

switch ($_REQUEST['gender']) {
    case 'male':
        echo "<h1>Congratulations<br/>
        You are: ".$_REQUEST['gender']. "</h1>";
        break;
    case 'female':
        echo "<h1>Congratulations<br/>
            You are: ".$_REQUEST['gender']. "</h1>";
        break;
    case 'other':
        echo "<h1>Congratulations<br/>
            You are: ".$_REQUEST['gender']. "</h1>";
        break;
    default:
        echo "<h1><span style='color: red;'>WARNING:</span><br/>
            Invalid input value specified.</h1>";
        break;
}
phpinfo();

?>