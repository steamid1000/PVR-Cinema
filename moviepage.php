<?php
session_start();
// $_SESSION["Mname"] = "Movie Page";
$movieId = $_SESSION['movieId'];
echo $movieId;
// echo session_save_path();

//Getting all the data from the server
require_once 'db_scripts/login.php';
$query = "select * from `movie_info` where movie_id='$movieId';";
$result = $conn->query($query);

$fetchedArray = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <link rel="stylesheet" href="moviepage.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"> </script>



</head>

<body>
    <div class="container">
        <img class="spdimg" src="images/<?php echo $fetchedArray[1]; ?>" alt="Error">
        <div class=" heading">
            <h1>
                <?php echo $fetchedArray[1]; ?>
            </h1>
            <h2> </h2>

            <!-- <a href="#videostory" class="button more" id="videolink">Watch Trealer <i style="margin-left: 0em;" class="fa fa-play-circle" aria-hidden="true">&nbsp;</i></a>    
        <div id="videostory" class="mfp-hide"style=" text-align: center;  margin: 0 auto; border-style: none;">
            <iframe class="vdo" width="853" height="480"  src="https://youtu.be/3Jk3vquJDGs" title="YouTube video player" frameborder="3" allow=" autoplay;  accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
           -->
        </div>


    </div>
    <div class="container">

    </div>
    <div class="aboutmovie">
        <h5 style="font-family:cursive; letter-spacing: 1mm; color: rgba(211, 209, 209, 0.562);"> About the movie:-</h5>
        <em
            style="color: rgba(255, 255, 255, 0.842);font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            <?php echo $fetchedArray[3]; ?>
        </em>
    </div>
    <h3 style="font-family:monospace; letter-spacing: 1mm; color: rgba(211, 209, 209, 0.562);">Cast:-</h3>
    <div class="cast">
        <h5 class="acname1" style="color: #fff;">Actor Name</h5>
    </div>



    <footer class="footer">
        <div class="ft">
            <h6 style="color: #fff; font-family: cursive; font-size: 1em; font-weight:900;">follow us:</h6>
            <a href="https://www.facebook.com/shridhar1999"><img class="footer2" src="images/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/shridhar2799/"><img class="footer2" src="images/insta.png" alt=""></a>
            <a href="https://twitter.com/Yeashpatil"> <img class="footer2" src="images/twitter.png" alt=""></a>
            <a href="https://www.youtube.com/channel/UChUiMKUqB5qLfsJ-i1paVMg"><img class="footer2"
                    src="images/youtube.png" alt=""></a>
        </div>

    </footer>


    <div id="aboutFooter"></div>
    <div class="ftcontainer">
        <footer class="footer">
            <div class="callme">
                <p style="color: white;">Questions? Call 000-800-040-1843</p>
            </div>
            <div class="footer-cols">
                <ul>
                    <li> <a href="#"> FAQ</a></li>
                    <li> <a href="#"> Investor Relations</a></li>
                    <li> <a href="#"> Privacy</a></li>
                    <li> <a href="#"> Speed Test</a></li>
                </ul>
            </div>
            <div class="footer-colss">
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Cookie Preferences</a></li>
                    <li><a href="#">Legal Notices</a></li>
                    <li><a href="aboutus.html"> About Us</a></li>
                </ul>

            </div>
            <div class="queries">
                <p> FOR QUERIES, FEEDBACK, AND SUGGESTIONS </p>
                <br><br>
                <div class="first">
                    <a href="mailto:contact@inoxmovies.com">
                        <img src="https://www.inoxmovies.com/Images/email.png" alt="Image" class="callstyle">
                    </a>
                    <span style="font-size: 14px;"><a href="mailto:contact@inoxmovies.com"
                            style="text-decoration: none;color: #8d8e92;display: block;margin: 7px;">priypatil09@gmail.com</a></span>
                    <span style="font-size: 14px;"><a href="mailto:contact@inoxmovies.com"
                            style="text-decoration: none;color: #8d8e92;display: block;margin: 7px;">Vishakhak25@gmail.com</a></span>
                    <br>
                </div>
                <div class="second">
                    <a href="Phone: 088009 00009"></a>
                    <img src="https://www.inoxmovies.com/Images/contact.png" alt="Image" class="callstyle"></a>
                    <span style="font-size: 14px;"><a href="tel:+918800900009"
                            style="text-decoration: none;color: #8d8e92;display: block;margin: 7px;">+91 8800900009 <br>
                            <span style="font-size: 12px;">9 am to 10 pm (Mon – Sun)</span></a>
                    </span>
                    <br>
                </div>


            </div>
            <div class="address">
                <p id="add"> Address:<br>DYP City Mall 3rd floor, 2104/5, <br> E-ward, near Opal Hotel,<br> Kawala Naka,
                    Kolhapur, Maharashtra 416003 </p>
            </div>
        </footer>
        <div class="PVR-india">
            <p>PVR India</p>
        </div>

    </div>


    <script>
        $('#videolink').magnificPopup({
            type: 'inline',
            midClick: true
        })

    </script>
    <script type="text/javascript" src="moviepage.js"></script>
</body>

</html>