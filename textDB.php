<?php
/*$myString="27 Feb 2018";
$file=fopen('record.txt','a') or die("fle open error");


//fwrite($file,"append demo ");
fwrite($file,$myString);
fwrite($file,"-".md5($_GET["pass"]));
fwrite($file,"-".$_GET["email"]);
fwrite($file,"\r\n");*/
function secured_hash($input)
{    
$output = password_hash($input,PASSWORD_DEFAULT);
return $output;
}
$my_file = 'record.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);

$new_data = "\n".'New';
$data = "\n".'Data';
fwrite($handle, $new_data);
fwrite($handle, ' ');
fwrite($handle, md5($data));
fwrite($handle,"\r\n");
echo "it worked";
?>


