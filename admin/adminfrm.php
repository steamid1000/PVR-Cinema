<?php
// include_once '../db_scripts/login.php';

function edit($index){
  $hn = "localhost";
  $un = "root";
  $pw = "";
  $db = "pvr-cinema";

  $conn =  mysqli_connect($hn,$un,$pw,$db);

  if (isset($_GET['movie_id'])) {
      $movie_id = $_GET['movie_id'];
      $query = "SELECT * FROM `movies` WHERE movie_id=$movie_id";
      $res = $conn->query($query);
        if($res = mysqli_fetch_array($res)){
          return $res[$index];
        }
      }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add New Movie</title>
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-image: url("../image/Admin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background: transparent;
      color: white;
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
      padding: 10px 20px;
      background-color: red;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 style="text-align: center;">Movie Details</h1>
    <form action="testupload.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title"> Movie Title:</label>
        <input type="text" id="title" name="title" required value="<?php echo edit(1);?>">
      </div>
      <div class="form-group">
        <label for="description"> Movie Trailer Link:</label>
        <input type="text" id="description" name="description" required value="<?php echo edit(2);?>">
      </div>
      <div class="form-group">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required value="<?php echo edit(3);?>">
      </div>
      <div class="form-group">
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required value="<?php echo edit(4);?>">
      </div>
      <div class="form-group">
        <label for="thumbnail">Movie Thumbnail:</label>
        <input type="file" id="thumbnail" name="thumbnail" required value="sdsds">
      </div>
      <div class="form-group">
        <label for="Ticket_price">Ticket Price:</label>
        <input type="text" id="Ticket_price" name="Ticket_price" required value="<?php echo edit(0);?>">
      </div>
      <div class="form-group">
        <button type="submit">Add Movie</button>
      </div>
    </form>
  </div>
</body>

</html>
