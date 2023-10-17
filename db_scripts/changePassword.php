<?php
require_once 'login.php';

$newPass = $_POST['NewPassword'];
$query="UPDATE `adminlogin` SET password='$newPass';";
$conn->query($query);
?>
<script>
alert('Once Booked Seats cannot be cancled');
</script>

<?php
Redirect('../admin/admin.php',true);
?>
