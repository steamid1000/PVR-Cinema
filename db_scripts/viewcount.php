<?php
$hn="localhost";
$username="root";
$password="";
$db="admin";

$con=mysqli_connect($hn,$username,$password,$db);
mysqli_query($con,"UPDATE page_view SET count=count+1;");
?>