<pre>
<?php
require("db_rw.php");
session_start();
print_r($GLOBALS);



//print_r($GLOBALS);
if(isset($_COOKIE["names"])){
if(isset($_FILES['fileToUpload'])){
$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
//echo $_FILES['fileToUpload']['name']."<br>";
//echo $_FILES['fileToUpload']['tmp_name']."<br>";

$arr=explode("/",$_FILES['fileToUpload']['type']);
//echo ($ar[0]);

if($arr[0]!="image"){
	echo "Filetype not supported";
}
else if(file_exists("uploads/".$n)){
	echo "Filename exists : ".$n;
}
else{
	if(move_uploaded_file($s,"uploads/".$n)){
		$s="UPDATE `photo` SET `Pname` ='uploads/".$n."' WHERE photo.Uname='".$_COOKIE["names"]."'";

		echo $s;
		if(updateSQL($s)){
			echo "Data Inserted into DB";
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


if(isset($_FILES['changeFile'])){
$s=$_FILES['changeFile']['tmp_name'];
$n=$_FILES['changeFile']['name'];
//echo $_FILES['changeFile']['name']."<br>";
//echo $_FILES['changeFile']['tmp_name']."<br>";

$ar=explode("/",$_FILES['changeFile']['type']);
//echo ($ar[0]);

if($ar[0]!="image"){
	echo "Filetype not supported";
}
else{
	if(move_uploaded_file($s,"uploads/".$n)){
		$s="UPDATE `photo` SET `Pname` = 'uploads/".$n."' WHERE `photo`.`Uname` ='".$_COOKIE["names"]."'";
		echo $s;
		if(updateSQL($s)){
			echo "update profile picture";
		}
		else{
			echo " profile picture DB Error!";
		}
	}
	else{
		echo "File upload error";
	}
}	
}
}
?>
</pre>