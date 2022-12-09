<?php
/*
    $ip = "10.11.32.140";
    $ping = exec("ping -n $ip",$output,$status);
    echo $status;
*/

// ping multi ip address
$iplist = ["10.11.32.140","192.168.1.1"];
$i = count($iplist) ;

for ($j=0; $j<$i ; $j++) {
	$ip = $iplist [$j] ;
	$ping = exec("ping -n  1  $ip" , $output, $status); 
	echo $status;
	echo '<br/>';
}

// add a description of the IP/URL
$iplist = array
(
	array("10.11.32.140", "PC_01") ,
	array("192.168.1.1","PC_02")
);
$i = count ($iplist);

for ($j=0; $j<$i ; $j++) {
	$ip = $iplist[$j];
	$ping = exec("ping  -n  1  $ip",$output,$status);
	echo "ping" .$iplist[$j] [0] .$iplist[$j] [1];
	echo $status;
	echo ' <br/> ';
}

$iplist = array
(
    array("10.11.32.140", "PC_01") ,
	array("192.168.1.1","PC_02")

);

$i = count($iplist);

for ($j=0; $j<$i ; $j++) {
	$ip = $iplist [$j] [0];
	$ping = exec("ping -n  1  $ip" , $output, $status); 
    echo "ping".$iplist[$j][0].$iplist[$j][1];
	echo $status;
	echo '<br/>';
}

?>