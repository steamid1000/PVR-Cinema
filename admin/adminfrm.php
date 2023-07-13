<!DOCTYPE html>
<html>

<head>
  <title>Add New Movie</title>
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-image: url("../image/admin.jpg");
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
    <form action="testupload.php" method="post" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="title"> Movie Title:</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="description"> Movie Trailer Link:</label>
        <textarea id="description" name="description" rows="1" required></textarea>
      </div>
      <div class="form-group">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
      </div>
      <div class="form-group">
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
      </div>
      <div class="form-group">
        <label for="thumbnail">Movie Thumbnail:</label>
        <input type="file" id="thumbnail" name="thumbnail" required>
      </div>
      <!-- <div class="form-group">
        <label for="backimage">Movie BackImage:</label>
        <input type="file" id="backimage" name="backimage" required>
      </div> -->

      <div class="form-group">
        <label for="Ticket_price">Ticket Price:</label>
        <input type="text" id="Ticket_price" name="Ticket_price" required>
      </div>
      <div class="form-group">
        <button type="submit">Add Movie</button>
      </div>
    </form>
  </div>
</body>

</html>
