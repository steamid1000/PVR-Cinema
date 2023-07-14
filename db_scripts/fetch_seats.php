<?php
require_once 'login.php';
$book_date = $_SESSION['date'];
$movieID = $_SESSION['movieID'];

$query = "SELECT `booked_seats` FROM `bookings` where dates='$book_date' and movie_id='$movieID';"; // add booking date
$Sold_seats = $conn->query($query);

$SeatArr = mysqli_fetch_all($Sold_seats);

if (!$Sold_seats)
    die("Failed to fetch");

$data = array(); // Gets the Seat number which has been occupied
$elem = "";

foreach ($SeatArr as $item) {
    $elem .= implode($item);
}


$str =  str_replace( array( '\'', '"',
',' , ';', '<', '>' ,']['), ',', $elem);

$finalOccupiedSeats = str_ireplace('""','',$str);


$jsonStringAgain = $finalOccupiedSeats;


?>