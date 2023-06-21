<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboard.css">
  <title>bookings</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
        <li class="active"><a href="bookings.php">Bookings</a></li>
      </ul><br>
    </div>
    <br>
    <div class="table-responsive table-hover table-striped">
    <table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
include 'book_db.php';
$selectquery="select * from spiderman1";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
echo $num;
// $res=mysqli_fetch_array($query);

while($res=mysqli_fetch_array($query))
{   
    
    // echo $res['IsTaken']. "<br>";
?>
    
    <tr>
    <td> spiderman </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>
 
    <!-- this is new line*********** -->
    <!-- This is for Spiderman 2 -->



  <h3> spiderman2</h3>
    <table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
// include 'db_conn.php';
$selectquery="select * from spiderman2";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
// echo $num;
// $res=mysqli_fetch_array($query);

while($res=mysqli_fetch_array($query))
{   
    
    // echo $res['IsTaken']. "<br>";
?>
    
    <tr>
    <td> spiderman </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>



    



<!-- <this is liast line************* -->



<!-- ******this is spiderman3 first ilne************** -->




<h3>spiderman3</h3>
<!-- "<br>"; -->

<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
// include 'db_conn.php';
$selectquery="select * from spiderman3";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
// echo $num;
// $res=mysqli_fetch_array($query);

while($res=mysqli_fetch_array($query))
{   
    
    // echo $res['IsTaken']. "<br>";
?>
    
    <tr>
    <td> spiderman </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>







<!-- ****this is spidesrman 3 last line*************** -->



<!-- ********this is Jai Bhim 1 ******************* -->



<h3>Jai Bhim 1</h3>
<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
// include 'db_conn.php';
$selectquery="select * from bhim1";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{   
    
  
?>
    
    <tr>
    <td> Jai Bhim </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>






<!-- ********* this is last of Jai Bhim1**************** -->
 


<!-- ********This is first of Jai Bhim2***************** -->




<h3>Jai Bhim2</h3>

<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
// include 'db_conn.php';
$selectquery="select * from bhim2";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{   
    
  
?>
    
    <tr>
    <td> Jai Bhim </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>







<!-- ***********This is last of Jai Bhim2***************** -->



<!-- ***********this is first of Jai Bhim3************* -->

<h3>Jai Bhim3</h3>



<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
// include 'db_conn.php';
$selectquery="select * from bhim3";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{   
    
     
?>
    
    <tr>

    <td> Jai Bhim </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>






<!-- ***************This is last of Jai Bhim3**************** -->


<!-- ********This is first of Kingsman1************ -->


<h3>Kingsman1</h3>
<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
 
$selectquery="select * from kings1";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{   
    
   
?>
    
    <tr>
    <td> Kingsman </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>






<!-- *************This is last of Kingsman1*************** -->

<!-- ***********This is first of Kingsman2********************* -->

<h3>Kingsman2</h3>
<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
 
$selectquery="select * from kings2";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{   
    
    // echo $res['IsTaken']. "<br>";
?>
    
    <tr>
    <td> Kingsman </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
// echo $res[3];
?>


    </table>





<!-- ********************This is last of Kingsman2***************************** -->


<!-- *******************This is first of Kingsman3***************************** -->

<h3>Kingsman3</h3>

<table class="table">
        <tr><th>movie name</th>
            <th> Seat No</th>
            <th>is taken</th>
            <th>Name</th>
            <th>age</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>

        <?php
// include 'db_conn.php';
$selectquery="select * from kings3";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{   
    
    // echo $res['IsTaken']. "<br>";
?>
    
    <tr>
    <td> Kingsman </td>
    <td> <?php echo $res['Seat_no'];?> </td>
    <td> <?php echo $res['IsTaken'];?> </td>
    <td> <?php echo $res['Name'];?> </td>
    <td> <?php echo $res['Age'];?> </td>
    <td> <?php echo $res['Email'];?> </td>
    <td> <?php echo $res['Gender'];?> </td>

    
    
  </tr>

<?php

}
 
?>


    </table>




<!-- *******************This is last of Kingsman3****************************** -->

</div>

    </div>
  </div>
</body>
</html>

  
</body>
</html>
<?php 

 ?>