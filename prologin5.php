<html>
<head>
<title>Demo page</title>
</head>
<body background="bg1.png" link="red">
<form name=frm method="POST">
	<font color="red">
<h3 align=center><marquee>WELCOME!!</marquee></h3> </font>
<br>
<br>	
<fieldset>
<legend align=center>Login</legend>
<table align=center>

<tr><td>Username</td><td><input type=text name=nm placeholder= "Enter your userame" required/></td></tr><br>
<tr><td>Password</td><td><input type=password name=pwd placeholder="Enter your password" required minlength=8 /></td></tr>
<tr><td colspan=2 align=center><input type=submit name="sub1" value="Student Login"  /></td></tr>
<tr><td colspan=2 align=center><input type=submit name="sub2" value="Faculty Login"  /></td></tr>
<tr><td colspan=2 align=center><a href='stureg.html'>Student Registration.</a></td></tr> 
<tr><td colspan=2 align=center><a href='teachreg.html'>Faculty Registration.</a></td></tr> 
</table>
</form>
</body >
</html>
<?php
session_start();//session starts

if(isset($_POST['sub1']))
{
	if ((!empty($_POST['nm'])) && !empty($_POST['pwd'])) 
	{
	$name=$_POST['nm'];
	$password=$_POST['pwd'];
	$link=mysqli_connect("localhost","root","","hpproject");//database application connection
	$qry="select * from student where name='$name' and password='$password'";//query
	$resultset=mysqli_query($link,$qry);
	while($res=mysqli_fetch_row($resultset))//returns 1 i.e the no. of entry
	{
		$_SESSION['Name']=$res[0];
		$_SESSION['ROLL']=$res[1];
		echo"
		<script type=\"text/javascript\">
		window.open('student3.html','_top');
		</script>
		"; 
	}

	echo("Invalid id or password");
}
	else
		echo "Insert values";

}
else if(isset($_POST['sub2']))
{
	if ((!empty($_POST['nm'])) && !empty($_POST['pwd'])) 
	{
	$name=$_POST['nm'];
	$password=$_POST['pwd'];
	$link=mysqli_connect("localhost","root","","hpproject");//database application connection
	$qry="select * from teacher where name='$name' and password='$password'";//query
	$resultset=mysqli_query($link,$qry);
	while($res=mysqli_fetch_row($resultset))//returns 1 i.e the no. of entry
	{
		$_SESSION['Name']=$res[0];
		$_SESSION['ID']=$res[1];
        echo"
		<script type=\"text/javascript\">
		window.open('faculty3.html','_top');
		</script>
		"; 
    
     }
     echo "invalid";
 




 }
 
  
	


	else
		echo "Insert values";

}
?>

