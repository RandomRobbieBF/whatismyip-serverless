<?php

function getUserIpAddr(){
    if(!empty($_SERVER['X-REAL-IP'])){
        //ip pass from proxy
        $ip = $_SERVER['X-REAL-IP'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$i = getUserIpAddr();
$v = array("IP" => $i);
$je = json_encode($v);
echo ($je);
?>
