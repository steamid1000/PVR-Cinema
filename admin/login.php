<?php
session_start();
require_once '../db_scripts/login.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
    body{
		background:transparent;
	}
	form{
		background:lightyellow;
	}
	h2{
		background:#ffbc34;
	}
	button{
		background:blue;
		color:white;
	}
	button:hover{
		background:#4fc3f7;
	}

		</style>
</head>
<body>
     <form action="" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="submit">Login</button>
     </form>
</body>
</html>


<?php
	if (isset($_POST['submit'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['password'];

		$query = "SELECT * from `adminlogin` where username='$uname' and password='$pass'";
		$result = $conn->query($query);
		$resultarr = mysqli_fetch_array($result);
		if ($resultarr) {
			$_SESSION['username'] = $uname;
			echo"<script>window.location.href='admin.php';</script>";
		}
		else {
			echo "<h1>Wrong Creditionals</h1>";
			die();
		}
	}
?>