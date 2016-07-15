<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css"></head>
<body>
<form name="frm" method="post" action="" enctype="multipart/form-data" > 
<table border=0>
<tr><th><f2>ASSIGNMENT </f2></th></tr>
<tr><td>1st sem</td><td><input type="file" Value="Upload File" name="upfile1">
<input type="submit" name="sb1" value="Upload"></td></tr>
<tr><td>2nd sem</td><td><input type="file" Value="Upload File" name="upfile2">
<input type="submit" name="sb2" value="Upload"></td></tr>
<tr><td>3rd sem</td><td><input type="file" Value="Upload File" name="upfile3">
<input type="submit" name="sb3" value="Upload"></td></tr>
<tr><td>4th sem</td><td><input type="file" Value="Upload File" name="upfile4">
<input type="submit" name="sb4" value="Upload"></td></tr>
<tr><td>5th sem</td><td><input type="file" Value="Upload File" name="upfile5">
<input type="submit" name="sb5" value="Upload"></td></tr>
<tr><td>6th sem</td><td><input type="file" Value="Upload File" name="upfile6">
<input type="submit" name="sb6" value="Upload"></td></tr>
<tr><td>7th sem</td><td><input type="file" Value="Upload File" name="upfile7">
<input type="submit" name="sb7" value="Upload"></td></tr>
<tr><td>8th sem</td><td><input type="file" Value="Upload File" name="upfile8">
<input type="submit" name="sb8" value="Upload"></td></tr>
</table>
<?php
if(isset($_POST['sb1']))
{
  if($_FILES['upfile1']['error']==0)
    {
        $tmpname=$_FILES['upfile1']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/1st/".$_FILES['upfile1']['name']; 
        
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
elseif(isset($_POST['sb2']))
{
  if($_FILES['upfile2']['error']==0)
    {
        $tmpname=$_FILES['upfile2']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/2nd/".$_FILES['upfile2']['name']; 
        
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
elseif(isset($_POST['sb3']))
{
  if($_FILES['upfile3']['error']==0)
    {
        $tmpname=$_FILES['upfile3']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/3rd/".$_FILES['upfile3']['name']; 
        
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
elseif(isset($_POST['sb4']))
{
  if($_FILES['upfile4']['error']==0)
    {
        $tmpname=$_FILES['upfile4']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/4th/".$_FILES['upfile4']['name']; 
        
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
elseif(isset($_POST['sb5']))
{
  if($_FILES['upfile5']['error']==0)
    {
        $tmpname=$_FILES['upfile5']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/5th/".$_FILES['upfile5']['name']; 
        
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
elseif(isset($_POST['sb6']))
{
  if($_FILES['upfile6']['error']==0)
    {
        $tmpname=$_FILES['upfile6']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/6th/".$_FILES['upfile6']['name']; 
        
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
elseif(isset($_POST['sb7']))
{
  if($_FILES['upfile7']['error']==0)
    {
        $tmpname=$_FILES['upfile7']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/7th/".$_FILES['upfile7']['name']; 
        
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
elseif(isset($_POST['sb8']))
{
  if($_FILES['upfile8']['error']==0)
    {
        $tmpname=$_FILES['upfile8']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."project/upload/8th/".$_FILES['upfile8']['name']; 
        
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
