<?php
require_once 'db_scripts/viewcount.php';
require_once 'db_scripts/login.php';
$query = "SELECT movies.movie_name, movies.movie_id, movie_info.movie_thumbnail FROM movies INNER JOIN movie_info ON movies.movie_id=movie_info.movie_id;";
$result = $conn->query($query);
// $resultarr = mysqli_fetch_array($result);

// var_dump($resultarr);
// var_dump($result);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PVR CINEMA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    
        html {
            scroll-behavior: smooth;
        }

        .big_Container {
            width: 100%;
            ;
            overflow-x: hidden;
        }

        .imgcontainer {
            background-image: url("./images/movie.jpg");
            background-size: cover;
            width: 100%;
            height: 800px;
            background-repeat: no-repeat;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            text-align: center;
            border-radius: 15px;
        }

        .imgcontainer img {
            width: 100%;
        }

        nav {

            position: relative;
            left: 60%;
            display: flex;
        }

        nav a {
            margin-top: 4%;
            margin-left: 50px;
            font-size: 20px;
            text-decoration: none;
            color: purple;
        }

        .me {
            margin-top: 8%;
            margin-left: 60%;
            /* border: 1px solid red; */
        }

        .me h4 {
            font-size: 55px;
            margin-bottom: 8%;
        }

        .me p {
            line-height: 4rem;
            font-size: 3rem;
            margin-left: 10%;

        }

        #head1 {
            width: 100%;
            height: 100px;
            border: 2px solid rgb(243, 13, 13);
            color: red;
        }

        #head1 h2 {
            position: relative;
            font-size: 30px;
            text-align: center;
            margin-top: 3%;
        }

        #head2 {
            width: 100%;
            height: 100px;
            border: 2px solid rgb(243, 13, 13);
            color: red;
        }

        #head2 h2 {
            position: relative;
            font-size: 30px;
            text-align: center;
            margin-top: 2%;
        }

        .movie_Container {
            width: 100%;
            height: 370px;
            display: flex;
            border: 2px solid green;
        }

        .movie_Container .box {
            width: 27%;
            height: 100%;
        }

        .container_Group {
            display: flex;
        }

        .movie_Container .box img {
            position: relative;
            width: 300px;
            left: 10%;
            height: 100%;
            border: 1px xo;
        }

        .imgcontainer_Group {
            position: relative;
            align-items: center;
        }

        .imgcontainer_Group .box {
            margin-right: 10%;
        }

        .Book_Now {
            background-color: rgb(221, 13, 13);
            width: 200px;
            height: 45px;
            margin-top: 5px;
            color: black;
            cursor: pointer;
            justify-content: center;
            border-radius: 17px;
            text-decoration: none;
        }

        .booktext {
            margin: 0em;
        }

        .Book_Now:hover {
            background-color: whitesmoke;
        }

        .box {
            padding: 3em;
            padding-top: 0em;
            padding-bottom: 1em;
            cursor: pointer;
        }

        .box:hover {
            opacity: 0.9;
        }

        body {
            background-color: rgb(90, 76, 76);
        }

        .footer {
            width: 100%;
            padding-top: 70px;
            background-color: black;
            margin: 1rem auto;
        }

        .footer a {
            color: #ffffff;
            font-size: 0.9rem;
        }

        .footer p {
            margin-bottom: 1.5rem;
        }

        .footer .footer-cols {
            display: grid;
            margin-left: 10%;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 0.2rem;
        }

        .footer li {
            list-style: none;
            line-height: 2rem;
        }

        .language {
            padding-top: 50px;

            width: 4rem;
            ;
        }


        .language select {
            width: 119px;
            padding: 12px;
            text-align: center;

            color: var(--light-color);
            /* background: transparent; */
        }

        .PVR-india {
            padding-top: 2rem;
            font-weight: 100;


        }

        .PVR-india p {
            font-size: 13px;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: large;
        }

        .address {
            /* background: red;
     */
            color: white;
            line-height: 28px;
        }

        .ftcontainer {
            width: 100%;
            height: 300px;
        }

        .footer {
            display: flex;

            width: 100%;
            height: 100%;
        }

        .callme {
            font-size: 18px;
            line-height: 27px;
        }

        .footer-cols {
            /* border: 1px solid red; */
            position: relative;
            /* margin-right: ; */
            text-align: center;
        }

        .footer-cols ul li a {
            text-decoration: none;
        }

        .footer-colss {
            position: relative;
            margin-left: -200px;
            margin-right: 50px;
            text-align: center;

        }

        .footer-colss ul li a {
            text-decoration: none;
        }

        .queries {

            position: relative;

        }

        .queries span {
            position: relative;
            margin-bottom: 50px;
        }

        .first {
            margin-top: -90px;
            position: relative;
        }

        .PVR-india {
            display: block;
            position: relative;
            margin-top: -100px;

        }
    </style>
</head>

<body>
    <div class="big_Container">
        <div class="imgcontainer">
            <div class="pvr">
                <nav>
                    <a href="#head1">Currently Streaming</a>
                    <a href="#head2">Coming Soon</a>
                    <a href="#aboutFooter">About Us</a>
                </nav>
                <div class="me">
                    <h4>PVR CINEMAS</h4>
                    <p id="about that"> Best stories require <br>Best Environment!! </p>
                </div>
            </div>
        </div>

        <div id="head1">
            <h2> Currently Streaming... </h2>
        </div>

        <form action="moviepage.php" method="pos">
        <div class="movie_Container">
            <div class="container_Group">
                <?php
                    while($resultarr = mysqli_fetch_array($result)) {
                        ?>
                        <div class="box">
                            <a href="moviepage.php?<?php echo "movieID=".$resultarr['movie_id'];?>">
                            <img src="images/<?php echo $resultarr['movie_thumbnail'];?>" alt="<?php echo $resultarr['movie_name'];?>">
                        <br>
                        <span><?php echo $resultarr['movie_name'];?></span>
                        <br>
                    </div> 
                </a>
                    <?php
                    }
                ?> 
            </div>
        </div>
        </form>
        <br />
        <br />

        <div id="head2">
            <h2> Coming Soon... </h2>
        </div>

        <div class="movie_Container">
            <div class="container_Group">
                <div class="box">
                    <img src="" alt="">
                    <br><br>
                </div>

                <div class="box">
                    <img src="" alt="">
                    <br><br>
                </div>

                <div class="box">
                    <img src="" alt="">
                    <br><br>
                </div>

                <div class="box">
                    <img src="" alt="">
                    <br><br>
                </div>
            </div>
        </div>

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
                                style="text-decoration: none;color: #8d8e92;display: block;margin: 7px;">+91 8800900009
                                <br>
                                <span style="font-size: 12px;">9 am to 10 pm (Mon – Sun)</span></a>
                        </span>
                        <br>
                    </div>


                </div>
                <div class="address">
                    <p id="add"> Address:<br>DYP City Mall 3rd floor, 2104/5, <br> E-ward, near Opal Hotel,<br> Kawala
                        Naka, Kolhapur, Maharashtra 416003 </p>
                </div>
            </footer>
            <div class="PVR-india">
                <p>PVR India</p>
            </div>

        </div>
</body>

</html>