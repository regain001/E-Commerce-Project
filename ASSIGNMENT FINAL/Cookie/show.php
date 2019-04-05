<?php
print_r($GLOBALS);
//echo $_COOKIE["pass"];
echo "<br>";
if(isset($_COOKIE["pass"]))
	echo "Hello : ".$_COOKIE["name"]."<br>";
else{
	echo "Hello unknown<br>";
}
?>