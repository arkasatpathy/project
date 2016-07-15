<html><html>
<head>
<title>Demo page</title>
</head>
<body background="bg1.png">
<form name=frm action="" method="POST">
<table border=3 width=100%>
<tr><td align=center><a href=master.html target=f>Home</a> </td>
<td align=center><a href=faculty.html target=f3>Faculty</a></td>
<td align=center><select name="stu" onchange="this.form.submit()">
<option>Student</option>	
<option value="1">1st Year</option>
<option value="2">2nd Year</option>
<option value="3">3rd Year</option>
<option value="4">4th Year</option>
</select></td>
<td align=center><a href=proevent.html target=f3>Events</a> </td>
<td align=center><a href=contactus.html target=f3>Contact Us</a> </td></tr>	
</body>
</html>
<?PHP
    function redirect($where)
    {      
       header("Location: $where");
    }
    if ($_POST['stu'] == '1'){
        redirect('first.html');
    }

    else if($_POST['stu'] == '2')
    {
        redirect('http://example.com/somewhere.php');
    }
    else if($_POST['stu'] == '3')
    {
        redirect('http://example.com/elsewhere.php');
    }
    else if($_POST['stu'] == '4')
    {
        redirect('http://example.com/elsewhere.php');
    }
?>