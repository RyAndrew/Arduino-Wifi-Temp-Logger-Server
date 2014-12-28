<?php

date_default_timezone_set('America/Chicago'); 

$logFile = './requestLog.csv';
$fp = fopen($logFile,'a');

//initialize array that will be new CSV row:
$logData = array(
	date('Y/m/d h:i:s')
//	,$_SERVER['REMOTE_ADDR']
//	,$_SERVER['REQUEST_METHOD']
);

/*
if(isset($_SERVER['HTTP_USER_AGENT'])){
	$logData[] = $_SERVER['HTTP_USER_AGENT'];
}

//Use this to log all GET data at once
if(count($_GET) > 0){
	$logData[] = 'GET VARS = ' . print_r($_GET, true);
}

//Use this to log all POST data at once
if(count($_POST) > 0){
	$logData[] = 'POST VARS = ' . print_r($_POST, true);
}
*/
if(isset($_POST['t1'])){
	$logData[] = $_POST['t1'];
}
if(isset($_POST['t2'])){
	$logData[] = $_POST['t2'];
}

//write data to CSV
fputcsv($fp, $logData);

echo "data logged!";

?>