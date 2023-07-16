<?php
    require_once 'login.php';
    $query = "SELECT SUM(amount) FROM `bookings`;";
    $total_earnings = $conn->query($query);
    $total_earnings = mysqli_fetch_array($total_earnings);
    $total_earnings = $total_earnings[0];
    
?>