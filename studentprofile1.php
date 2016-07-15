
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>student profile</title>
</head>
</head>
 <body background="bg1.png">
  <form name="frm" method="POST">
    <hr color=orange size-15 />
 <img src="vssut.png" alt="VSSUT" align=right style="width:150px;height:150px;">

<?php
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:prologin4.php");

}
else{
  echo "<br>";
  echo "<br>";

echo "Welcome  ".$_SESSION['Name']."<br>";
echo "Ready for some assignments?<br>";
echo " Your Session ID...".session_id();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
}
?>


  <hr color=green size-15 />
  </form>
 </body>

</html>
