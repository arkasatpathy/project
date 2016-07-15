<?php
if(isset($_POST['submit']))
{
	$name=$_POST['nm'];
	$pwd=$_POST['pwd'];
	$contact=$_POST['cno'];
	$id=$_POST['id'];
	$stream=$_POST['stream'];
	$email=$_POST['email'];
	$link=mysqli_connect("localhost","root","","hpproject");

	$qry="insert into teacher(name,id,stream,email,password,contact) values('$name','$id','$stream','$email','$pwd','$contact')";

	$res=mysqli_query($link,$qry);
	if($res)
	{
		//header("location:tech_reg.html");
		echo "You have been successfully registered";
	}
}
?>