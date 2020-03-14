<?php
// +----------------------------------------------------------------------
// | JuhePHP [ NO ZUO NO DIE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010-2015 http://juhe.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: Juhedata <info@juhe.cn>
// +----------------------------------------------------------------------
 
//----------------------------------
// 作文大全调用示例代码 － 聚合数据
// 在线接口文档：http://www.juhe.cn/docs/187
//----------------------------------
 
header('Content-type:text/html;charset=utf-8');
 
 
//配置您申请的appkey
$appkey = "0f1ac807b11c06de47e4efb6f7a927a1";
 
 
 
 
//************1.作文分类列表************
$url = "http://zuowen.api.juhe.cn/zuowen/typeList";
$params = array(
      "key" => $appkey,//您申请的APPKEY
      "id" => "1",//1为年级，2为题材，3为字数，4为等级
);
$paramstring = http_build_query($params);
$content = juhecurl($url,$paramstring);
$result = json_decode($content,true);
$jobj=new stdclass();
foreach($result as $key=>$value){
    $jobj->$key=$value;
    }
$grade =$result['result'][1];
print_r($jobj );
echo '使用$jobj->row[0][\'name\']输出数组元素:'.$jobj->result[0]['name'].'<br>';
echo '编码后的json字符串：'.json_encode($jobj).'<br>';//打印编码后的json字符串
// if($result){
//     if($result['error_code']=='0'){
//         print_r($result);
//         foreach($result as $key => $v) {
//             print_r($key);
//             }

//     }else{
//         echo $result['error_code'].":".$result['reason'];
//     }
// }else{
//     echo "请求失败";
// }
//**************************************************
 
 
 

 
 
 
 
 
/**
 * 请求接口返回内容
 * @param  string $url [请求的URL地址]
 * @param  string $params [请求的参数]
 * @param  int $ipost [是否采用POST形式]
 * @return  string
 */
function juhecurl($url,$params=false,$ispost=0){
    $httpInfo = array();
    $ch = curl_init();
 
    curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
    curl_setopt( $ch, CURLOPT_USERAGENT , 'JuheData' );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 60 );
    curl_setopt( $ch, CURLOPT_TIMEOUT , 60);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if( $ispost )
    {
        curl_setopt( $ch , CURLOPT_POST , true );
        curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
        curl_setopt( $ch , CURLOPT_URL , $url );
    }
    else
    {
        if($params){
            curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
        }else{
            curl_setopt( $ch , CURLOPT_URL , $url);
        }
    }
    $response = curl_exec( $ch );
    if ($response === FALSE) {
        //echo "cURL Error: " . curl_error($ch);
        return false;
    }
    $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
    $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
    curl_close( $ch );
    return $response;
}