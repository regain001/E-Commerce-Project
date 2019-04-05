<?php
print_r($_COOKIE);
if(isset($_COOKIE["names"])){
	
		setcookie('names',"",time()-5000,"/");
		setcookie("u_id", "",time()+5000,"/");
		echo "Log out..";
        header("Location:home1.php?logOut=success");
   }
   else{
	   header("Location:home1.php");
   }
?>