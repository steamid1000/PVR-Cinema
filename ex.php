<?php
include 'db_conn.php';
$selectquery="select * from spiderman1";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
echo $num;
$res=mysqli_fetch_array($query);

while($res=mysqli_fetch_array($query))
{   
    echo $res['IsTaken']. "<br>";
}
// echo $res[3];
?>