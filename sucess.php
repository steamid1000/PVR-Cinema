<?php
session_start();
require_once 'db_scripts/login.php';
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 40px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .homepage{
  background-color: rgba(133, 28, 14, 0.61);
  width: 200px;
  font-weight: bolder;
  height: 45px;
  font-size: 18px;
  margin-top: 5px;
  color: rgb(12, 12, 12);
  cursor: pointer;
  justify-content: center;
  border-radius: 17px;
  text-decoration: none;

      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1> Payment Successful</h1>
        <h2 class="name">Your Name :-</h2>
        <h2 class="name"> <?php echo $_SESSION['name'] . "<br>"?></h2>
        <br>
        <h2 class="Email">Your Email :-</h3>
        <h2 class="name"> <?php echo $_SESSION['email'] . "<br>"?></h2>
        <br>
        <h2 class="Seat"> movie name :-</h2>
        <h2 class="name"> <?php   echo $_SESSION["moviename"] . "<br>"?></h2>
        <br>
        <h2 class="Seat">Your Seats No :-</h2>
        <h2 class="name"> <?php echo $_COOKIE['Seats'] . "<br>"?></h2>
        <br>
        

        <h2 class="Seat"> Your Amount :-</h2>
        <h2 class="name"> <?php echo $_COOKIE['price'] . "<br>"?></h2>
        <br>
        
        <p>Your Ticket Recipt will sent on Email Shortly.<br/>thanks for Boocking Ticket.</p>
      <a href="index.php"><button class="homepage">Back To Homepage</button></a>
    </div>
    </body>
</html>

<?php

  $name = $_SESSION['name'];
  $booked_seats = $_COOKIE['Seats'];
  $email = $_SESSION['email'];
  $age = $_SESSION['age'];
  $gender = $_SESSION['gender'];
  $book_date = $_SESSION['date'];
  $modify = '['.$booked_seats.']';
  $amount = $_COOKIE['price'];
  $movieID = $_SESSION['movieID'];


  $query = "INSERT INTO `bookings`(`movie_id`, `dates`, `booked_seats`, `name`, `email`, `age`, `gender`,`amount`) VALUES ('$movieID','$book_date','$modify','$name','$email','$age','$gender','$amount')";

  if ($conn->query($query)) {
    echo "<h1 style='color:Blue;'>Seats Booked</h1>";
    echo '<script>
          print();
          </script>';
  }

?>
 
 