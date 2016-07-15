<?php
$fullpath=$_SERVER['DOCUMENT_ROOT']."/project/download/".$_GET['name'];
//echo $fullpath;
if($fd=fopen($fullpath,"r"))
{
$fsize=filesize($fullpath);
$path_parts=pathinfo($fullpath);
/*pathinfo() returns an associative array containing information about path*/
//var_dump($path_parts);
header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
/*Content-dispositon header is used to supply a recommended filename and force the browser to display the save dialog.*/
header("content-length:$fsize");
header("cache-control:private");
/*PHP scripts often generate dynamic content that must not be cached by the client browser.
There are number of options that users may be able to set for their browser that change its default caching behaviour. 
By sending the headers above, you should override any settings that may otherwise cause the output of yur script to be chached.*/
while(!feof($fd))
{
	$buffer=fread($fd,$fsize);
	echo $buffer;
}
fclose($fd);
exit;
}

?>