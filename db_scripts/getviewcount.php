<?php

require_once 'login.php';
$query = "SELECT `count` FROM `page_view`;";
$total_views = $conn->query($query);
$total_views = mysqli_fetch_array($total_views);
$total_views = $total_views[0];
?>