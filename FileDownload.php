<?php
$handle=opendir("./download");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
		//echo $file.",br>";
		echo "<a href='download.php?name=$file'>$file</a><br>";
	}
}
closedir($handle);
?>