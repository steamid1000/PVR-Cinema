<?php
require_once 'login.php';

$newPass = $_POST['NewPassword'];
$query="UPDATE `adminlogin` SET password='$newPass' ;";
$conn->query($query);

Redirect('../admin/admin.php',true);
?>