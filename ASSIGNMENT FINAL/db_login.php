<?php
require("db_rw.php");
session_start();
$cookie_value=$_SESSION["userName"];
setcookie("names", $cookie_value,time()+5000);
	
$s="select * from ecommerce.photo where Uname='".$_POST["uname"]."'";
	
if(isset($_POST["uname"]) && isset($_POST["pass"])) {	
	$jsn=getJSONFromDB($s);
	$jd=json_decode($jsn);
	//$_SESSION["login"]="true";
	foreach($jd as $v){
	if ($_POST["uname"]==$v->Uname && $_POST["pass"]==$v->password)
	{
		//$_SESSION["login"]="true";
		header("Location:profile.html?login=success");
		$_SESSION["userName"]=$_POST["uname"];
	}
}
}
?>