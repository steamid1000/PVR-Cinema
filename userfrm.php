<?php
  session_start();
  require_once "db_scripts/login.php";
  $movieID = $_GET['movieID'];
  $_SESSION['movieID'] = $movieID;

  $query = "SELECT * from `movies` WHERE movie_id='$movieID'";
  $result = $conn->query($query);
  $resultarr = mysqli_fetch_assoc($result);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['date'] = $_POST['book_date'];
    $_SESSION['moviename'] = $resultarr['movie_name'];

    Redirect('seatBook.php',true);
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>User Form</title>
    <style>
      body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-image: url("./image/user.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
      }

      .container {
        max-width: 400px;
        margin: 20px auto;
        background: transparent;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        color:white;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
      }

      .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      .form-group textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        resize: vertical;
      }

      .form-group select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      .form-group button {
        background-color: red;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .form-group button:hover {
        background-color: #45a049;
      }

      .hidden {
        display: none;
      }
      /* Hide the default radio button */
      input[type="radio"] {
        display: none;
      }

      /* Style the custom radio button */
      input[type="radio"] + label {
        display: inline-block;
        cursor: pointer;
        padding-left: 25px;
        position: relative;
        vertical-align: middle;
      }

      /* Style the checked state */
      input[type="radio"]:checked + label::before {
        content: "";
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-color: black; /* Change color as desired */
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      select {
        padding: 5px;
        width: 150px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 style="text-align: center; color: white">User Form</h1>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your name"
            required
          />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
          />
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input
            type="age"
            id="age"
            name="age"
            placeholder="Enter your age"
            required
          />
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
        </div>
        <input type="radio" id="male" name="gender" value="Male" />
        <label for="male"> Male</label>
        <input type="radio" id="female" name="gender" value="female" />
        <label for="female"> Female</label>
        <br /><br />
        <div class="form-group">
          <label for="book_date">Booking Date:</label>
          <input type="date" id="book_date" name="book_date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo $resultarr['end_date'];?>" required />
        </div>
        <div>
          <label for="time-slot">Choose a time slot:</label>
          <select id="time-slot">
            <option value="11:00 AM">11:00 AM</option>
            <option value="03:00 PM">03:00 PM</option>
            <option value="09:00 PM">09:00 PM</option>
          </select>
        </div>
        <br /><br />
        <div class="form-group">
          <button id="Book_now">Book Seats</button>
          <div id="warningMessage" class="hidden">
            Once you Confirmed Ticket, can't be cancelled!!
          </div>
        </div>
      </form>
    </div>

    <script src="seatBook.js"></script>
    <script>
      document.getElementById("book_date").valueAsDate = new Date();
    </script>
  </body>
</html>
