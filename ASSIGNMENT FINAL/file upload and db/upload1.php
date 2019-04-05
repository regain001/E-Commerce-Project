<pre>
<?php
require("db_rw.php");
print_r($GLOBALS);

$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
//echo $_FILES['fileToUpload']['name']."<br>";
//echo $_FILES['fileToUpload']['tmp_name']."<br>";

$ar=explode("/",$_FILES['fileToUpload']['type']);
//echo ($ar[0]);

if($ar[0]!="image"){
	echo "Filetype not supported";
}
else if(file_exists("uploads\".$n)){
	echo "Filename exists : ".$n;
}
else{
	if(move_uploaded_file($s,"uploads\".$n)){
		$s="insert into photo values(null,'".$_POST['uName']."','uploads\".$n."')";
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
?>
</pre>