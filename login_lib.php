<?php
function loadArray(){
	global $auth;
	$myfile = fopen("record.txt", "r") or die("Unable to open file!");
	while($c=fgets($myfile)){
		$a=explode(" ",$c);
		$auth[$a[0]]=$a[1];
		$auth[$a[0]]=trim($a[1]);
		//print_r($a);
	}
	//echo "<pre>";print_r($auth);echo "</pre>";
	fclose($myfile);
}
?>