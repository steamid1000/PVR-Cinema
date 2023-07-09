<?php
    $hn = "localhost";
    $un = "root";
    $pw = "";
    $db = "pvr-cinema";

    $conn =  mysqli_connect($hn,$un,$pw,$db); // connects to the db table

    if($conn->connect_error)
    {
        die("Server had a problem while connecting");
    }
    function Redirect($url, $permanent = false) { //Redirects to given page
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
        }
      
?>