<?php
require_once 'login.php';
mysqli_query($conn,"UPDATE `page_view` SET count=count+1;");
?>