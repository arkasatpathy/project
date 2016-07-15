<?php
session_start();  
session_destroy();
header("Location:master.html");
exit();
?>