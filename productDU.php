<?php
	require("db_rw.php");
	if(isset($_GET["sl_no"]) && isset($_GET["title"])){
	$ar=explode("_",$_GET["sl_no"]);
	$query="UPDATE `products` SET `p_title` = '".$_GET["title"]."' WHERE `products`.`p_id` = ".$ar[1].";";	
	 updateSQL($query);
	 echo "<h2>Product is <b>updated</b> ..</h2>";
	 $_SESSION["update"]="true";
	}
	else if(isset($_GET["sl_no"]) && isset($_GET["desp"])){
	$ar=explode("_",$_GET["sl_no"]);
	$query="UPDATE `products` SET `p_desp` = '".$_GET["desp"]."' WHERE `products`.`p_id` = ".$ar[1].";";	
	 updateSQL($query);
	 echo "<h2>Product is <b>updated</b> ..</h2>";
	 $_SESSION["update"]="true";
	}
	else if(isset($_GET["sl_no"]) && isset($_GET["quantity"])){
	$ar=explode("_",$_GET["sl_no"]);
	$query="UPDATE `products` SET `p_qty` = '".$_GET["quantity"]."' WHERE `products`.`p_id` = ".$ar[1].";";	
	 updateSQL($query);
	 echo "<h2>Product is <b>updated</b> </h2>";
	 $_SESSION["update"]="true";
	}
	else if(isset($_GET["sl_no"]) && isset($_GET["price"])){
	$ar=explode("_",$_GET["sl_no"]);
	$query="UPDATE `products` SET `p_price` = '".$_GET["price"]."' WHERE `products`.`p_id` = ".$ar[1].";";	
	 updateSQL($query);
	 echo "<h2>Product is <b>updated</b> </h2>";
	 $_SESSION["update"]="true";
	}
	else{
		
		if(isset($_GET["sl_no"])){
		$ar=explode("_",$_GET["sl_no"]);
		$query="DELETE FROM `products` WHERE `products`.`p_id` = ".$ar[1]."";	
		updateSQL($query);
		echo "<h2>Product is <b>removed</b> </h2>";
		$_SESSION["update"]="true";
	}
	}
?>