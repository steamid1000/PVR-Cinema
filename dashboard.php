<?php 
session_start();
require 'book_db.php';
 
$tables = mysqli_query($conn, "SHOW TABLES");

$total_seats = 0; //^ will store all the booked seats from the database

while ($table = mysqli_fetch_object($tables)) {
  $table_name = $table->{"Tables_in_vintage"};

  $results = mysqli_query($conn,"SELECT * FROM `$table_name` WHERE IsTaken=1");

  $total_seats +=  mysqli_num_rows($results);
  
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboard.css">
  <title>Dashboard</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <div class="logout">
       <a href="logout.php">Logout</a>
       </div>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Vintage Cinema</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="dashboard.php">Dashboard</a></li>
        <li><a href="bookings.php">Bookings</a></li>
      </ul><br>
    </div>
    <br>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Total visit users</h4>
            <h4><p> 368</p></h4>
              <?php
              
              require 'db_conn.php'; 
              // $views=mysqli_query( $conn,);
              //  echo $views;
               $T=mysqli_query($conn,"SELECT * FROM  view  WHERE count>0;");
               $total=0;
               while($view=mysqli_fetch_array($T))
               {
                 $total+=$view['count'];
               }
                
               ?>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="well">
            <h4>Current shows</h4>
            <p>3</p> 
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="well">
            <h4>Total Bookings</h4>
            <p><?php echo $total_seats ?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Total Revenue Rs.</h4>
            <p> <?php echo $total_seats*100?></p> 
          </div>
        </div>
        
      </div>
      
    </div>
  </div>

   
        
      </div>
</body>
</html>

  
</body>
</html>
<?php 
if (!$conn) {
	echo "Connection failed!";
}


 ?>