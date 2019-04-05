<?php
require("db_rw.php");
session_start();

	$s="select * from ecommerce.userinfo where uname='".$_POST["unames"]."'";
	
if(isset($_POST["unames"]) && isset($_POST["pass"])) {	
	$jsn=getJSONFromDB($s);
	$jd=json_decode($jsn);
	//$_SESSION["login"]="true";
	foreach($jd as $v){
	if ($_POST["unames"]==$v->uname && (md5($_POST["pass"])==$v->password))
	{
			$cookie_value1=$v->uname;
			setcookie("names", $cookie_value1,time()+5000,'/');
			$cookie_value2=$v->u_id;
			setcookie("u_id", $cookie_value2,time()+5000,'/');
			
		if($_POST["unames"]=="admin" && $_POST["pass"]=="admin"){
			header("Location:logged.php?login=success");
		}
		else{
			header("Location:home1.php?login=success");
		
		}
	}
}
}
?>