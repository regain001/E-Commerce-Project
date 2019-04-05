<?php
session_start();
?>
<?php

$auth=array();
include("login_lib.php");
loadArray();
//$_SESSION["flag"]="2";
if(isset($_POST['uname']) && isset($_SESSION["flag"])){
	$u=$_POST['uname'];
    $p=$_POST['pass'];
	if($u=="" && $p=="") {$_SESSION["flag"]="1";}
    
	else if(isset($auth[$u]) && $auth[$u]==$p && $_SESSION["flag"]=="0"){
	echo "Hello ".$u;
	header("Location:home1.php"); //redirecting to target page
	//echo "I can't recognize you";	
}

else{
	//echo "I can't recognize you";
	//header("Location:login.php?error=incorrect auth");
    $_SESSION["error_msg"] = "<div class='c'><b>Username or password is incorrect</b></div>";
    $_SESSION["script"] =  "<script> $(document).ready(function(){ $('#logIn1').modal('open'); }); </script>";
	 //if(isset($script)){ echo $script; } 
	  $_SESSION["flag"]="1";
                    
}}
header("Location:home1.php");
?>