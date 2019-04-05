<pre>
<?php
require("db_rw.php");
//session_start();
print_r($GLOBALS);



//print_r($GLOBALS);
$n=10;
for($i=0;$i<$n;$i++){
	$photo="img_".$i;
	if(isset($_FILES[$photo]) ){
    $p_id=explode("_",$photo);
	
	$s=$_FILES[$photo]['tmp_name'];
	$n=$_FILES[$photo]['name'];
	$arr=explode("/",$_FILES[$photo]['type']);
     echo "abc";

	if($arr[0]!="image"){
		echo "Filetype not supported";
	}
	else if(file_exists("uploads/".$n)){
		echo "Filename exists : ".$n;
	}
	else{
		if(move_uploaded_file($s,"uploads/".$n)){
			$s="UPDATE `products` SET `products`.`p_img` = 'uploads/".$n."' WHERE `products`.`p_id` = ".$p_id[1].";";
			//"INSERT INTO `products` (`p_id`, `p_cat`, `p_brand`, `p_title`, `p_price`, `p_img`) 
			//VALUES (NULL, '".$category."', '".$brand."', '".$title."', '".$price."', 'uploads/".$n."');";
		
			//"UPDATE `photo` SET `Pname` ='uploads/".$n."' WHERE photo.Uname='".$_COOKIE["names"]."'";

			echo $s;
			if(updateSQL($s)){
				 header("Location:logged.php?log=success");
			}
			else{
				echo "DB Error!";
			}
		}
		else{
			echo "File upload error";
		}
	}	
	$n=$n-100000;
	}
	//$p='text_'+$i;
	//$_POST[];
	$n=$n+1;
}






?>
</pre>
