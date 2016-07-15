<?php
$handle=opendir("./Remarks");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
		//echo $file.",br>";
		echo "<a href='remarks.php?name=$file'>$file</a><br>";
	}
}
closedir($handle);
?>