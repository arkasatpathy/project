<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css"></head>
<body>
<form name="frm" method="post" action="" enctype="multipart/form-data" > 
<table border=0>
<tr><th><f2>REMARKS </f2></th></tr>
<tr><td>Evaluation report</td><td><input type="file" Value="Upload File" name="upfile1">
<input type="submit" name="sb1" value="Upload"></td></tr>
</table>
<?php
if(isset($_POST['sb1']))
{
  if($_FILES['upfile1']['error']==0)
    {
        $tmpname=$_FILES['upfile1']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/Remarks/rem/".$_FILES['upfile1']['name']; 
        
        if(move_uploaded_file($tmpname,$tpath))
        {
            echo "File Uploaded Sucessfully....";            
                         
        }
        else
        {
            echo "File not uploaded!!<br>";
        }
    }  
    
}






else echo"";
?>
</form>
</body>
</html>
