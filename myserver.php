<?php
session_start();
?>

<?php
//echo "<pre>";print_r($GLOBALS); echo "</pre>";

//echo "<br>";

$_SESSION["names"]="0";
$_SESSION["emails"]="0";
$_SESSION["passwords"]="0";
$_SESSION["addresss"]="0";
$_SESSION["states"]="0";
$_SESSION["zips"]="0";
$_SESSION["countrys"]="0";
	
if(isset($_POST["firstname"] )&& isset($_POST["lastname"]) && isset($_POST["address"]) && isset($_POST["pass1"]) && isset($_POST["pass2"])){
if($_POST["firstname"] =="" || $_POST["lastname"]=="" ){
    //echo "your input is empty!";
	$_SESSION["names"]="1";
}
$find=strpos($_POST["email"],"@" );
$finds=strpos($_POST["email"],"." );
if($find < $finds){
	}
 else{
	 $_SESSION["emails"]="1";
	//echo "</br>your email doesnot in correct formet!";
} 
/*if($number!=11){
	echo "</br>your phone no. must be contain 11 digits !!";
}*/

$pas=strlen($_POST["pass1"]);
$pas1=strlen($_POST["pass2"]);
if($pas==$pas1 && $pas>=8){
	
}
else{
	$_SESSION["passwords"]="1";
	//echo "</br>Your password doesnot match";
}
if($_POST["country"] =="" || $_POST["address"] =="" || $_POST["zip"]=="" || $_POST["state"]==""){
    //echo "your input is empty!";
	if($_POST["country"] ==""){$_SESSION["countrys"]="1";}
	if($_POST["address"] ==""){$_SESSION["addresss"]="1";}
	if($_POST["zip"] ==""){$_SESSION["zips"]="1";}
	if($_POST["state"] ==""){$_SESSION["states"]="1";}
	
	
}

} 
else{
	$_SESSION["names"]="0";
	$_SESSION["emails"]="0";
	$_SESSION["passwords"]="0";
	$_SESSION["addresss"]="0";
	$_SESSION["states"]="0";
	$_SESSION["zips"]="0";
	$_SESSION["countrys"]="0";
	
}
header("Location:home1.php");	
?>