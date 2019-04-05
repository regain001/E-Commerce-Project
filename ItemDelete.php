<?php
	require("db_rw.php");
	if(isset($_GET["sl_no"]) && isset($_GET["qty"])){
	$ar=explode("_",$_GET["sl_no"]);
	$query="UPDATE `cart` SET `qty` = '".$_GET["qty"]."' WHERE `cart`.`sl_no` = ".$ar[1].";";	
	 updateSQL($query);
	 echo "<h2>Product is <b>updated</b> from the cart</h2>";
	 $_SESSION["update"]="true";
	}
	else{
		if(isset($_GET["sl_no"])){
		$ar=explode("_",$_GET["sl_no"]);
		$query="DELETE FROM `cart` WHERE `cart`.`sl_no` = ".$ar[1]."";	
		updateSQL($query);
		echo "<h2>Product is <b>removed</b> from the cart</h2>";
		$_SESSION["update"]="true";
	}
	}
	
?>