<?php

require_once 'db_scripts/login.php';
$query = "SELECT movies.movie_name, movies.movie_id, movie_info.movie_thumbnail FROM movies INNER JOIN movie_info ON movies.movie_id=movie_info.movie_id;";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/14850a9668.js" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" href="index.css">


   <title>PVR Cinema</title>
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


      <!-- navbar ends here -->

      <div id="slider">
         <img src="./image/pvr7.webp" alt="Image 1">
         <img src="./image/pvr2.jpg" alt="Image 2">
         <img src="./image/pvr3.avif" alt="Image 3">
         <img src="./image/pvr4.jpg" alt="Image 4">
         <img src="./image/pvr6.webp" alt="Image 5">

      </div>

      <div class="currentlyShowing">
         <p id="mytitle">Currently Showing</p>

      </div>
      <!-- this is the card section got from getbootstrap.com -->
      <div class="middlecontainer">


         <div class="middlecontainer">
            <!-- first div -->
            <?php
            while ($resultarr = mysqli_fetch_array($result)) {
               ?>
               <a href="moviepage.php?<?php echo "movieID=" . $resultarr['movie_id']; ?>">
                  <div class="card" style="max-width: 18rem;">
                     <img src="MovieImages/<?php echo $resultarr['movie_thumbnail']; ?>"
                        alt="<?php echo $resultarr['movie_name']; ?>">
                     <button type="button" id="fifth" class="btn btn-primary">Book Tickets</button>
                     <button type="button" id="sixth" class="btn btn-primary">Play Trailer</button>
                  </div>
               </a>
               <?php
            }
            ?>
            <!-- first div ends here -->
            <!-- second div -->
            <!-- <div class="card" style="max-width: 18rem;">
        <img src="./image/movie.jpg" alt="">
        
          <button type="button" id="first" class="btn btn-primary">Book Tickets</button>
          <button type="button" id="second" class="btn btn-primary">Play Trailer</button>   
  
      </div> -->
            <!-- second div ends here -->
            <!-- third div -->
            <!-- <div class="card" style="max-width: 18rem;">
        <img src="./image/movie.jpg" alt="">
        
          <button type="button" id="third" class="btn btn-primary">Book Tickets</button>
          <button type="button" id="forth" class="btn btn-primary">Play Trailer</button>   
       
      </div> -->
            <!-- third div ends here -->
         </div>
      </div>


      <div class="upcoming_movies" id="comingsoon">
         <p id="mytitle">Coming Soon</p>
      </div>

      <div class="upcoming">
         <!-- first div -->
         <div class="card" style="max-width: 18rem;">
            <img src="./image/movie.jpg" alt="">

            <button type="button" id="a" class="btn btn-primary">Book Tickets</button>
            <button type="button" id="b" class="btn btn-primary">play Trailer</button>

         </div>
         <!-- first div ends here -->
         <!-- second div -->
         <div class="card" style="max-width: 18rem;">
            <img src="./image/movie.jpg" alt="">

            <button type="button" id="c" class="btn btn-primary">Book Tickets</button>
            <button type="button" id="d" class="btn btn-primary">play Trailer</button>

         </div>
         <!-- second div ends here -->
         <!-- third div -->
         <div class="card" style="max-width: 18rem;">
            <img src="./image/movie.jpg" alt="">

            <button type="button" id="e" class="btn btn-primary">Book Tickets</button>
            <button type="button" id="f" class="btn btn-primary">play Trailer</button>

         </div>
         <!-- third div ends here -->

         <!-- forth div starts here -->

         <!-- forth div ends starts here -->




      </div>

      <!-- this is the card section got from getbootstrap.com ends here -- -->


   </div>
   <!-- following code is footer code -->
   <div class="footer">
      <div id="about"></div>
      <div class="footer-container">

         <div class="footer-links">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="#">Portfolio</a></li>
               <li><a href="#">Contact</a></li>
            </ul>
         </div>
         <div class="footer-connect">
            <form action="#" method="post">
               <input type="email" name="email" placeholder="Enter your email">
               <button type="button" class="btn btn-primary">Subscribe</button>

            </form>
         </div>

      </div>
      <hr class="footer-line">
      <div class="lastdiv">
         <div class="footer-bottom">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
         </div>
         <div class="footer-social-icons">
            <ul>
               <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
         </div>
      </div>
   </div>

   <!-- footer ends here -->


   <script src="index.js"></script>
</body>

</html>