<?php
if(isset($_POST['submit1']))
{
	$name=$_POST['nm'];
	$pwd=$_POST['pwd'];
	$contact=$_POST['cno'];
	$rno=$_POST['rno'];
	$sem=$_POST['sem'];
	$email=$_POST['email'];
	$link=mysqli_connect("localhost","root","","hpproject");

	$qry="insert into student(name,roll,semester,email,password,contact) values('$name',$rno,'$sem','$email','$pwd',$contact)";

	$res=mysqli_query($link,$qry);
	if($res)
	{
		//header("location:stureg.html");
		echo "You have been successfully registered";
		echo "<br>";
		echo "<html><a href=prologin3.html> Now login here</a></html>";
		
	}
}
?>