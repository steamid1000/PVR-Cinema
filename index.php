<?php

require_once 'db_scripts/login.php';
$query = "SELECT movies.status, movies.movie_name, movies.movie_id, movie_info.movie_thumbnail,movie_info.movie_description FROM movies INNER JOIN movie_info ON movies.movie_id=movie_info.movie_id;";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/14850a9668.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="index.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <!-- For pop up -->
   <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
   <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
   <title>PVR Cinema</title>

   <style>
      #fifth {
         background: lightblue;
         top: 190px;
         left: 78px;
         margin-right: -20px;
         margin-left: 45px;
         border-radius: 10px;

      }

      #fifth:hover {
         background: lightyellow;
      }

      #sixth {
         width: 90px;
         top: 190px;
         margin-left: 15px;
         border-radius: 10px;
         height: 40px;
         background: lightblue;
      }

      #sixth:hover {
         background: lightyellow;
      }

      #b {
         background: lightblue;
         margin-top: 150px;
         margin-left: -0px;
      }

      #b:hover {
         background: lightyellow;
      }

      .card img {
         border: 1px solid red;
         height: 400px;
      }
   </style>

</head>

<body>
   <div class="container">

      <!-- navbar starts here -->

      <nav class="navbar">
         <div class="navbar-logo">
            <a href="index.html">
               <img src="./image/logo2.jpg" alt="Logo">
            </a>
         </div>
         <ul class="navbar-links">
            <li><a href="#mytitle">Currently Showing</a></li>
            <li><a href="#comingsoon">Coming Soon</a></li>
            <li><a href="#about">About Us</a></li>
         </ul>
      </nav>

   </div>
   <!-- navbar ends here -->
   <div class="conatiner mt-2 mb-3">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="image/pvr1.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="image/pvr2.webp" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="image/pvr3.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="image/pvr4.jpg" class="d-block w-100" alt="...">
         </div>
      </div>
   </div>
   <!-- </div> -->

   <div class="currentlyShowing">
      <p id="mytitle">Currently Showing...</p>
   </div>
   <!-- this is the card section got from getbootstrap.com -->
   <div class="middlecontainer">

      <div class="middlecontainer">
         <!-- first div -->
         <?php

         while ($resultarr = mysqli_fetch_array($result)) {
            if ($resultarr['status'] == 'Active') {

         ?>
               <div class="card" style="max-width: 18rem;">
                  <img src="MovieImages/<?php echo $resultarr['movie_thumbnail']; ?>" alt="<?php echo $resultarr['movie_name']; ?>" class="img rounded">
                  <button type="button" style="background-color:yellow" id="fifth" class="btn btn-primary"><a href="userfrm.php?movieID=<?php echo $resultarr['movie_id']; ?>" style="text-decoration:none;color:black;">Book Tickets</a></button>
                  <button type="button"  id="sixth" class="btn btn-primary"><a class="iframe" style="text-decoration:none;color:black;" href="<?php echo $resultarr['movie_description']; ?>">Play</a></button>
               </div>
         <?php
            }
         }
         ?>
      </div>
   </div>


   <div class="upcoming_movies" id="comingsoon">
      <p id="mytitle">Coming Soon....</p>
   </div>

   <div class="upcoming">
      <?php
      $query = "SELECT movies.status, movies.movie_name, movies.movie_id, movie_info.movie_thumbnail,movie_info.movie_description FROM movies INNER JOIN movie_info ON movies.movie_id=movie_info.movie_id;";
      $result = $conn->query($query);

      while ($resultarr = mysqli_fetch_array($result)) {
         if ($resultarr['status'] == 'Upcoming') {
            // <!-- first div -->
      ?>
            <div class="card position-relative" style="max-width: 18rem;">
               <img src="./MovieImages/<?php echo $resultarr['movie_thumbnail']; ?>" alt="<?php echo $resultarr['movie_name']; ?>" class="w-100">
               <button type="button" id="b" class="btn btn-primary position-absolute top-50 start-50 translate-middle"><a style="text-decoration:none;color:black;" href="<?php echo $resultarr['movie_description']; ?>">Play
                     Trailer</a></button>

            </div>
            <!-- first div ends here -->
            <!-- second div -->

      <?php }
      } ?>
   </div>

   <!-- this is the card section got from getbootstrap.com ends here -- -->



   <!-- following code is footer code -->
   <div class="footer">
      <div id="about"></div>
      <div class="footer-container">
         <div class="footer-links">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="aboutus.html">About Us</a></li>
               <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="">Contact</a></li>
            </ul>
         </div>
         <div class="footer-contact">
            <p><i class="fas fa-home mr-3"></i> DYP City Mall 3rd floor,near Opal Hotel, Kolhapur, Maharashtra</p>
            <p><i class="fas fa-envelope mr-3"></i> priypatil09@gmail.com</p>
            <p><i class="fas fa-envelope mr-3"></i> vishkhakamb25@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 088009 00009</p>
         </div>
      </div>
      <hr class="footer-line">
   </div>
   <div class="lastdiv">
      <div class="footer-bottom">
         <div class="footer-social-icons">
            <p>Follow us</p>
            <ul>
               <li><a href="https://www.facebook.com/moviesatpvr"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="https://twitter.com/_PVRCinemas"><i class="fab fa-twitter"></i></a></li>
               <li><a href="https://www.youtube.com/user/PVRChannel"><i class="fab fa-youtube"></i></a></li>
               <li><a href="https://instagram.com/pvrcinemas_official"><i class="fab fa-instagram"></i></a></li>
               <li><a href="https://www.linkedin.com/company/pvr-limited"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
         </div>
         <p>COPYRIGHT © 2023 PVR LIMITED. ALL RIGHTS RESERVED.</p>
      </div>
   </div>

   <!-- footer ends here -->


   <script src="index.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>