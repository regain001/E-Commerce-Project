<?php
require("db_rw.php");
session_start();
	$query="INSERT INTO `userinfo` (`u_id`, `fname`, `lname`, `uname`, `email`, `password`, `address`, `mobile`, `state`, `zip`, `country`) VALUES 
    (NULL, '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["username"]."', '".$_POST["email"]."', '".md5($_POST["pass1"])."',
    '".$_POST["address"]."', '".$_POST["mobile"]."', '".$_POST["state"]."', '".$_POST["zip"]."', '".$_POST["country"]."');";
	
if(isset($_POST["username"]) && isset($_POST["pass1"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]))
{
	$jsn=updateSQL($query);
	header("Location:home1.php?signup=success");
}

?>