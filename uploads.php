<pre>
<?php
require("db_rw.php");
session_start();
print_r($GLOBALS);



print_r($GLOBALS);

if(isset($_FILES['fileToUpload']) && isset($_POST['title']) && isset($_POST['price'])){
$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$title=$_POST['title'];
$price=$_POST['price'];
$brand=$_POST['brand'];
$category=$_POST['category'];
$desp=$_POST['desp'];
$qty=$_POST['qty'];
$arr=explode("/",$_FILES['fileToUpload']['type']);

if($arr[0]!="image"){
	echo "Filetype not supported";
}
else if(file_exists("uploads/".$n)){
	echo "Filename exists : ".$n;
}
else{
	if(move_uploaded_file($s,"uploads/".$n)){
		$s="INSERT INTO `products` (`p_id`, `p_cat`, `p_brand`, `p_title`, `p_price`, `p_img`,`p_qty`, `p_desp`) 
		VALUES (NULL, '".$category."', '".$brand."', '".$title."', '".$price."', 'uploads/".$n."', '".$qty."', '".$desp."');";

		echo $s;
		if(updateSQL($s)){
			//echo "Data Inserted into DB";
			header("Location:logged.php");
		}
		else{
			echo "DB Error!";
		}
	}
	else{
		echo "File upload error";
	}
}	
}





?>
</pre>