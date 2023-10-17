<?php
session_start();
$movieID = $_SESSION['movieID'];
require_once 'db_scripts/fetch_seats.php';

//Fetching the rate of the selected movie for user convinience

$query = "select `ticket_price` from `movie_info` where movie_id='$movieID'";
$result = $conn->query($query);
$fetched = $result->fetch_row();
$film_amount = $fetched[0];

if ($jsonStringAgain == null) {
  $jsonStringAgain = '[1]';
}
//Fetched seats
// Pass PHP array to JavaScript
echo "<script>";
echo "var arr = " . $jsonStringAgain . ";";
echo "window.glob = arr;";
echo "</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="seatBook.css" />
  <title>Seat Booking</title>
</head>

<body>
  <div class="movie-container">
    <select id="movie">
      <option value="<?php echo $film_amount; ?>"><?php echo $film_amount ?></option>
    </select>
  </div>

  <ul class="showcase">
    <li>
      <div class="seat"></div>
      <small>N/A</small>
    </li>

    <li>
      <div class="seat selected"></div>
      <small>Selected</small>
    </li>

    <li>
      <div class="seat occupied"></div>
      <small>occupied</small>
    </li>
  </ul>

  <div class="container">
    <div class="screen"></div>
    <div class="row">
      <div class="seat">1</div>
      <div class="seat">2</div>
      <div class="seat">3</div>
      <div class="seat">4</div>
      <div class="seat">5</div>
      <div class="seat">6</div>
      <div class="seat">7</div>
      <div class="seat">8</div>
    </div>
    <div class="row">
      <div class="seat">9</div>
      <div class="seat">10</div>
      <div class="seat">11</div>
      <div class="seat">12</div>
      <div class="seat">13</div>
      <div class="seat">14</div>
      <div class="seat">15</div>
      <div class="seat">16</div>
    </div>

    <div class="row">
      <div class="seat">17</div>
      <div class="seat">18</div>
      <div class="seat">19</div>
      <div class="seat">20</div>
      <div class="seat">21</div>
      <div class="seat">22</div>
      <div class="seat">23</div>
      <div class="seat">24</div>
    </div>

    <div class="row">
      <div class="seat">25</div>
      <div class="seat">26</div>
      <div class="seat">27</div>
      <div class="seat">28</div>
      <div class="seat">29</div>
      <div class="seat">30</div>
      <div class="seat">31</div>
      <div class="seat">32</div>
    </div>

    <div class="row">
      <div class="seat">33</div>
      <div class="seat">34</div>
      <div class="seat">35</div>
      <div class="seat">36</div>
      <div class="seat">37</div>
      <div class="seat">38</div>
      <div class="seat">39</div>
      <div class="seat">40</div>
    </div>

    <div class="row">
      <div class="seat">41</div>
      <div class="seat">42</div>
      <div class="seat">43</div>
      <div class="seat">44</div>
      <div class="seat">45</div>
      <div class="seat">46</div>
      <div class="seat">47</div>
      <div class="seat">48</div>
    </div>
  </div>


  <p class="text">
    You have selected <span id="count">0</span> seats for a price of Rs<span id="total">0</span>
  </p>


  <button id="Confrm"
    style="margin:10px; padding:15px; border-radius: 20px; font-size:0.9rem; background-color:rgba(3, 161, 239, 0.915); ">Procced
    to Payment</button>
  <script src="seatBook.js"></script>

</body>

</html>